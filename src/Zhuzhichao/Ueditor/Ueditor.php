<?php namespace Zhuzhichao\Ueditor;

class Ueditor {
	public static function content($content = '', $config = []) {

		$attr = Ueditor::makeConfig2String($config);
		echo "<script type='text/plain' {$attr}>{$content}</script>";
	}

	private static function makeConfig2String($config) {
		$string = '';
		if (is_array($config)) {
			if ($config === []) {
				$string = "id='myEditor'";
			}
			foreach ($config as $k => $v) {
				$string .= " {$k}='{$v}'";
			}
		} else {
			$string = "id='{$config}'";
		}

		return $string;
	}

	public static function css() {
		echo '<link href="'.asset('packages/zhuzhichao/ueditor/themes/default/css/ueditor.css').'" type="text/css" rel="stylesheet">';
	}

	public static function js() {
		echo '<script type="text/javascript" charset="utf-8" src="'.route('ueditor.config').'"></script>';
		echo '<script type="text/javascript" charset="utf-8" src="'.asset('packages/zhuzhichao/ueditor/ueditor.all.min.js').'"></script>
            <script type="text/javascript" src="'.asset('packages/zhuzhichao/ueditor/lang/zh-cn/zh-cn.js').'"></script>';
	}
}
