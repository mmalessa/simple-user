<?php
namespace AppBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class AppExtension extends Extension
{
	public function load(array $configs, ContainerBuilder $container)
	{

		$yamlLoader = new YamlFileLoader(
				$container,
				new FileLocator(__DIR__.'/../../Infrastructure/Resources/config')
				);

		$yamlLoader->load('services.yml');
		$yamlLoader->load('repositories.yml');
	}
}