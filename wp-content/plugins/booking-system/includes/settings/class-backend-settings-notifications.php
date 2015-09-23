<?php

/*
* Title                   : Pinpoint Booking System WordPress Plugin
* Version                 : 2.1.1
* File                    : includes/settings/class-backend-settings-notifications.php
* File Version            : 1.0.4
* Created / Last Modified : 04 September 2015
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : Back end notifications settings PHP class.
*/

    if (!class_exists('DOPBSPBackEndSettingsNotifications')){
        class DOPBSPBackEndSettingsNotifications extends DOPBSPBackEndSettings{
            /*
             * Constructor
             */
            function __construct(){
                add_filter('dopbsp_filter_default_settings_notifications', array(&$this, 'defaults'), 9);
            }
            
            /*
             * Display notifications settings.
             * 
             * @return emails settings HTML
             */
            function display(){
                global $DOPBSP;
                
                $DOPBSP->views->backend_settings_notifications->template(array('id' => $_POST['id']));
                
                die();
            }
            
            /*
             * Set default notifications settings.
             * 
             * @param default_notifications (array): default notifications options values
             * 
             * @return default notifications settings array
             */
            function defaults($default_notifications){
                $default_notifications = array('templates' => '1',
                                               'method_admin' => 'mailer',
                                               'method_user' => 'mailer',
                                               'email' => '',
                                               'email_reply' => '',
                                               'email_name' => '',
                                               'email_cc' => '',
                                               'email_cc_name' => '',
                                               'email_bcc' => '',
                                               'email_bcc_name' => '',

                                               'smtp_host_name' => '',
                                               'smtp_host_port' => '25',
                                               'smtp_ssl' => 'false',
                                               'smtp_tls' => 'false',
                                               'smtp_user' => '',
                                               'smtp_password' => '',

                                               'smtp_host_name2' => '',
                                               'smtp_host_port2' => '25',
                                               'smtp_ssl2' => 'false',
                                               'smtp_tls2' => 'false',
                                               'smtp_user2' => '',
                                               'smtp_password2' => '',

                                               'send_book_admin' => 'true',
                                               'send_book_user' => 'true',
                                               'send_book_with_approval_admin' => 'true',
                                               'send_book_with_approval_user' => 'true',
                                               'send_approved' => 'true',
                                               'send_canceled' => 'true',
                                               'send_rejected' => 'true');
                
                return $default_notifications;
            }
        }
    }