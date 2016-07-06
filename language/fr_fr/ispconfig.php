<?php
/**
 * fr_fr language for the ispconfig module
 */
// Basics
$lang['Ispconfig.name'] = "ISPConfig";
$lang['Ispconfig.module_row'] = "Serveur";
$lang['Ispconfig.module_row_plural'] = "Serveurs";
$lang['Ispconfig.module_group'] = "Groupes de Serveurs";
$lang['Ispconfig.tab_stats'] = "Statistiques";
$lang['Ispconfig.tab_client_stats'] = "Statistiques";
// Module management
$lang['Ispconfig.add_module_row'] = "Ajouter un Serveur";
$lang['Ispconfig.add_module_group'] = "Ajouter un groupe de Serveur";
$lang['Ispconfig.manage.module_rows_title'] = "Serveurs";
$lang['Ispconfig.manage.module_groups_title'] = "Groupes de serveur";
$lang['Ispconfig.manage.module_rows_heading.name'] = "Nom du serveur";
$lang['Ispconfig.manage.module_rows_heading.hostname'] = "Nom d'hôte";
$lang['Ispconfig.manage.module_rows_heading.accounts'] = "Comptes";
$lang['Ispconfig.manage.module_rows_heading.options'] = "Options";
$lang['Ispconfig.manage.module_groups_heading.name'] = "Nom du groupe";
$lang['Ispconfig.manage.module_groups_heading.servers'] = "Numéro du serveur";
$lang['Ispconfig.manage.module_groups_heading.options'] = "Options";
$lang['Ispconfig.manage.module_rows.count'] = "%1\$s / %2\$s"; // %1$s est le nombre actuel de comptes, %2$s est le nombre total de comptes disponibles
$lang['Ispconfig.manage.module_rows.edit'] = "Editer";
$lang['Ispconfig.manage.module_groups.edit'] = "Editer";
$lang['Ispconfig.manage.module_rows.delete'] = "Supprimer";
$lang['Ispconfig.manage.module_groups.delete'] = "Supprimer";
$lang['Ispconfig.manage.module_rows.confirm_delete'] = "Êtes-vous sûr de vouloir supprimer ce serveur?";
$lang['Ispconfig.manage.module_groups.confirm_delete'] = "Êtes-vous sûr de vouloir supprimer ce groupe de serveurs?";
$lang['Ispconfig.manage.module_rows_no_results'] = "Il n'y a pas de serveurs.";
$lang['Ispconfig.manage.module_groups_no_results'] = "Il n'y a pas de groupes de serveurs.";
$lang['Ispconfig.order_options.first'] = "Premier serveur non-plein";
// Add row
$lang['Ispconfig.add_row.box_title'] = "Ajouter un serveur ISPConfig";
$lang['Ispconfig.add_row.basic_title'] = "Paramètres de base";
$lang['Ispconfig.add_row.notes_title'] = "Notes";
$lang['Ispconfig.add_row.name_server_host_col'] = "Nom d'hôte";
$lang['Ispconfig.add_row.remove_name_server'] = "Retirer";
$lang['Ispconfig.add_row.add_btn'] = "Ajouter un serveur";
$lang['Ispconfig.add_row.name_server_host_col'] = "Nom d'hôte";
$lang['Ispconfig.edit_row.box_title'] = "Edit un serveur ISPConfig";
$lang['Ispconfig.edit_row.basic_title'] = "Paramètres de base";
$lang['Ispconfig.edit_row.notes_title'] = "Notes";
$lang['Ispconfig.edit_row.name_server_host_col'] = "Nom d'hôte";
$lang['Ispconfig.edit_row.remove_name_server'] = "Retirer";
$lang['Ispconfig.edit_row.add_btn'] = "Editer le Serveur";
$lang['Ispconfig.row_meta.server_name'] = "Nom du serveur";
$lang['Ispconfig.row_meta.host_name'] = "Nom d'hôte du serveur";
$lang['Ispconfig.row_meta.host_name_db'] = "Nom d'hôte du serveur de bdd";
$lang['Ispconfig.row_meta.host_name_web'] = "Nom d'hôte du serveur web";
$lang['Ispconfig.row_meta.host_name_mail'] = "HNom d'hôte du serveur mail";
$lang['Ispconfig.row_meta.user_name'] = "Nom d'utilisateur Distant";
$lang['Ispconfig.row_meta.remote_pw'] = "Mot de Passe d'utilisateur Distant";
$lang['Ispconfig.row_meta.soap_location'] = "SOAP Location";
$lang['Ispconfig.row_meta.soap_uri'] = "SOAP URI";
$lang['Ispconfig.row_meta.multiserver'] = "Le Serveur est un multi-serveur";
$lang['Ispconfig.row_meta.account_limit'] = "Limitations de compte";
// Package fields
$lang['Ispconfig.package_fields.type'] = "Type de compte";
$lang['Ispconfig.package_fields.type_standard'] = "Standard";
$lang['Ispconfig.package_fields.template'] = "Modèle client ISPConfig";
$lang['Ispconfig.package_fields.host_names_web'] = "Serveur Web";
$lang['Ispconfig.package_fields.host_names_mail'] = "Serveur Mail";
$lang['Ispconfig.package_fields.host_names_db'] = "Serveur BDD";
$lang['Ispconfig.package_fields.host_names_ns_primary'] = "Serveur de Nom Primaire";
$lang['Ispconfig.package_fields.host_names_ns_secondary'] = "Serveur de Nom Secondaire";
// Service fields
$lang['Ispconfig.service_field.client_id'] = "ISPConfig ID client - A ENTRER SEULEMENT SI LE CLIENT EXISTE SUR ISPConfig !";
$lang['Ispconfig.service_field.contactname'] = "Nom de contact";
$lang['Ispconfig.service_field.username'] = "Nom d'Utilisateur";
$lang['Ispconfig.service_field.password'] = "Mot de Passe";
$lang['Ispconfig.service_field.confirm_password'] = "Confirmer le Mot de Passe";
$lang['Ispconfig.service_field.domain'] = "Choisir votre Nom de Domaine";
// Service info
$lang['Ispconfig.service_info.username'] = "Nom d'Utilisateur";
$lang['Ispconfig.service_info.password'] = "Mot de Passe";
$lang['Ispconfig.service_info.server'] = "Serveur";
$lang['Ispconfig.service_info.options'] = "Options";
$lang['Ispconfig.service_info.domain'] = "Domaine Inclu";
$lang['Ispconfig.service_info.option_login'] = "Se connecter";
$lang['Ispconfig.service_field.domain'] = "Choisir votre Nom de Domaine";
// Tooltips
$lang['Ispconfig.service_field.tooltip.contactname'] = "Vous pouvez laisser le nom du contact vide pour générer automatiquement un.";
$lang['Ispconfig.service_field.tooltip.username'] = "Vous pouvez laisser le nom d'utilisateur vide pour générer automatiquement un.";
$lang['Ispconfig.service_field.tooltip.password'] = "Vous pouvez laisser le mot de passe vide pour générer automatiquement un.";
$lang['Ispconfig.service_field.tooltip.client_id'] = "Cela ne devrait être saisie manuellement lors de la création d'un nouveau service de Blesta pour un client qui existe déjà dans ISPConfig.
        Dans ce cas, décochez  'Provision en utilisant le module ISPConfig', et entrez l'ID que vous voyez dans le panneau ISPConfig dans Client / clients. Le service Blesta sera alors connecté au client compte ISPConfig";
$lang['Ispconfig.service_field.tooltip.domain'] = "Si vous avez besoin des domaines supplémentaires, vous pouvez les commander via notre formulaire de commande de domaine, et les configurer dans votre compte d'hébergement.";
$lang['Ispconfig.service_field.existing_domain'] = "Le domaine existe déjà et doit être transféré";
// Errors
$lang['Ispconfig.!error.server_name_valid'] = "Vous devez entrer un nom de serveur.";
$lang['Ispconfig.!error.host_name_valid'] = "Le nom d'hôte du serveur maître semble être invalide.";
$lang['Ispconfig.!error.host_name_db_valid'] = "Le nom d'hôte du serveur de BDD semble être invalide.";
$lang['Ispconfig.!error.host_name_mail_valid'] = "Le nom d'hôte du serveur mail semble être invalide.";
$lang['Ispconfig.!error.host_name_web_valid'] = "Le nom d'hôte du serveur web semble être invalide.";
$lang['Ispconfig.!error.user_name_valid'] = "Le nom d'utilisateur semble être invalide.";
$lang['Ispconfig.!error.remote_pw_valid'] = "Le mot de passe d'utilisateur distant semble être invalide.";
$lang['Ispconfig.!error.remote_key_valid_connection'] = "Une connexion au serveur n'a pas pu être établie. S'il vous plaît vérifier que le nom d'hôte, nom d'utilisateur, et la clé à distance sont corrects.";
$lang['Ispconfig.!error.account_limit_valid'] = "Limite de compte doit être laissée vide (pour les comptes illimités) ou réglé sur une valeur entière.";
$lang['Ispconfig.!error.meta[template].empty'] = "Un modèle ISPConfig est nécessaire.";
$lang['Ispconfig.!error.api.internal'] = "Une erreur interne est survenue, ou le serveur n'a pas répondu à la demande.";
$lang['Ispconfig.!error.module_row.missing'] = "Une erreur interne a eu lieu. Le module ligne est indisponible.";
$lang['Ispconfig.!error.ispconfig_domain.exists'] = "Désolé, ce domaine est déjà enregistré.";
$lang['Ispconfig.!error.ispconfig_contactname.format'] = "Le nom de contact peut contenir que des lettres et des chiffres et ne peut pas commencer par un nombre.";
$lang['Ispconfig.!error.ispconfig_contactname.test'] = "Le nom du contact ne peut pas commencer par «test».";
$lang['Ispconfig.!error.ispconfig_username.format'] = "Le nom d'utilisateur peut contenir uniquement des lettres et des chiffres et ne peut pas commencer par un nombre.";
$lang['Ispconfig.!error.ispconfig_username.test'] = "Le nom d'utilisateur ne peut pas commencer par «test».";
$lang['Ispconfig.!error.ispconfig_username.length'] = "Le nom d'utilisateur doit être entre 1 et 8 caratères.";
$lang['Ispconfig.!error.ispconfig_password.valid'] = "Le mot de passe doit contenir au moins 8 caratères.";
$lang['Ispconfig.!error.ispconfig_password.matches'] = "Le mot de passe et sa confirmation ne sont pas identiques.";
$lang['Ispconfig.!error.ispconfig_domain.format'] = "Le Nom de Domaine n'est pas valide";

?>
