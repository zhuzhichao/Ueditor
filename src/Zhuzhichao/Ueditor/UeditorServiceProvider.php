<?php namespace Zhuzhichao\Ueditor;

use Illuminate\Support\ServiceProvider;

class UeditorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		$this->package('zhuzhichao/ueditor');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$router = $this->app['router'];
		$router->match(['post', 'get'], '/ueditor/controller', 'UeditorController@getAction');
		$router->get('/ueditor.config.js', [
			'as'   => 'ueditor.config',
			'uses' => 'UeditorController@config'
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return array();
	}

}
