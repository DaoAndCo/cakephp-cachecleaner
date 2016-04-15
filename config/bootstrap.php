<?php
use Cake\Core\Configure;

if ( ! Configure::check('CacheClear') )
    Configure::load('CacheCleaner.config', 'default');