<?php
namespace WP_Rocket\Engine\Media\Lazyload\CSS;
use WP_Post;
use WP_Rocket\EventManagement\SubscriberInterface;

class Subscriber implements SubscriberInterface {

    /**
     * Returns an array of events that this subscriber wants to listen to.
     *
     * The array key is the event name. The value can be:
     *
     *  * The method name
     *  * An array with the method name and priority
     *  * An array with the method name, priority and number of accepted arguments
     *
     * For instance:
     *
     *  * array('hook_name' => 'method_name')
     *  * array('hook_name' => array('method_name', $priority))
     *  * array('hook_name' => array('method_name', $priority, $accepted_args))
     *  * array('hook_name' => array(array('method_name_1', $priority_1, $accepted_args_1)), array('method_name_2', $priority_2, $accepted_args_2)))
     *
     * @return array
     */
    public static function get_subscribed_events() {
        return [

        ];
    }

	public function maybe_replace_css_images(string $html): string {
		return $html;
	}

	public function clear_generated_css() {

	}

	public function clear_generate_css_post(WP_POST $post) {

	}

	public function insert_lazyload_script() {

	}

	public function create_lazy_css_files(array $data): array {
		return $data;
	}

	public function create_lazy_inline_css(array $data): array {
		return $data;
	}
}
