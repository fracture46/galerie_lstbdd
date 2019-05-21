<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('galerie_lstbdd', 'Configuration/TypoScript', 'Galerie_lstbdd');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_auteur', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_auteur.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_auteur');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_image', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_image.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_image');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_album', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_album.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_album');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_category', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_tag', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_tag');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_galerielstbdd_domain_model_reseausocial', 'EXT:galerie_lstbdd/Resources/Private/Language/locallang_csh_tx_galerielstbdd_domain_model_reseausocial.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_galerielstbdd_domain_model_reseausocial');

    }
);
