<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Module;
/**
 * Class Banner
 *
 * @package
 */
class Banner extends \Opencart\System\Engine\Controller {
	/**
	 * @param array $setting
	 *
	 * @return string
	 */
	public function index(array $setting): string {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');
		$this->load->model('catalog/category'); // Load category model

		$data['banners'] = [];
		$data['categories'] = []; // Initialize categories array

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'))) {
				$data['banners'][] = [
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize(html_entity_decode($result['image'], ENT_QUOTES, 'UTF-8'), $setting['width'], $setting['height'])
				];
			}
		}

		// Fetch categories
        $categories = $this->model_catalog_category->getCategories();

        foreach ($categories as $category) {
            $data['categories'][] = [
                'category_id' => $category['category_id'],
                'name' => $category['name'],
                'href' => $this->url->link('product/category', 'path=' . $category['category_id'])
            ];
        }


		if ($data['banners']) {
			$data['module'] = $module++;

			$data['effect'] = $setting['effect'];
			$data['controls'] = $setting['controls'];
			$data['indicators'] = $setting['indicators'];
			$data['items'] = $setting['items'];
			$data['interval'] = $setting['interval'];
			$data['width'] = $setting['width'];
			$data['height'] = $setting['height'];

			return $this->load->view('extension/opencart/module/banner', $data);
		} else {
			return '';
		}
	}
}
