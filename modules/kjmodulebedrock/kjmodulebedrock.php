<?php
/**
 * Copyright since 2019 Kaudaj
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@kaudaj.com so we can send you a copy immediately.
 *
 * @author    Kaudaj <info@kaudaj.com>
 * @copyright Since 2019 Kaudaj
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

declare(strict_types=1);

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

class KJModuleBedrock extends Module
{
    public function __construct()
    {
        $this->name = 'kjmodulebedrock';
        $this->tab = 'others';
        $this->version = '1.0.0';
        $this->author = 'Kaudaj';
        $this->ps_versions_compliancy = ['min' => '1.7.8.0', 'max' => _PS_VERSION_];

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Avis Produit', [], 'Modules.kjmodulebedrock.Admin');
        $this->description = $this->trans('Gérez les avis produits sur mesure dans votre back-office.', [], 'Modules.kjmodulebedrock.Admin');

        $this->ps_versions_compliancy = ['min' => '1.7.8.0', 'max' => _PS_VERSION_];

        $this->templateFile = 'module:kjmodulebedrock/avisProduit.tpl';
    }

    /**
     * {@inheritdoc}
     */
    public function isUsingNewTranslationSystem(): bool
    {
        return true;
    }
    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome') && 
            $this->registerHook('actionObjectLanguageAddAfter') && 
            $this->installFixtures() &&
            $this->uninstallPrestaShop16Module() &&
            $this->disableDevice(Context::DEVICE_MOBILE);
    }

    public function uninstall()
    {
        $tabId = Tab::getIdFromClassName('avisController');
        if ($tabId) {
            $tab = new Tab($tabId);
            $tab->delete();
        }

        return parent::uninstall();
    }
}
