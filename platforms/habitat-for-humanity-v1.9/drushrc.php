<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
  2 => 'testing',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'contextual' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'openid_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'translation_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'options' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'number' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'list_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'list' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'text' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'trigger_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'poll' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file_module_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'locale_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'overlay' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'field_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7078',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image_module_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'shortcut' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'block_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'psr_0_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/psr_0_test/psr_0_test.module',
        'basename' => 'psr_0_test.module',
        'name' => 'psr_0_test',
        'info' => 
        array (
          'name' => 'PSR-0 Test cases',
          'description' => 'Test classes to be discovered by simpletest.',
          'core' => '7.x',
          'hidden' => true,
          'package' => 'Testing',
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'module_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_script_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'filter_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ajax_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'error_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_2' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'image_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'form_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_1' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'entity_query_access_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/entity_query_access_test.module',
        'basename' => 'entity_query_access_test.module',
        'name' => 'entity_query_access_test',
        'info' => 
        array (
          'name' => 'Entity query access test',
          'description' => 'Support module for checking entity query results.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'common_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'database_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.24',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'menu_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'theme_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test_3' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'path_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'batch_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'file_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'session_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/upgrade.filter.test',
            35 => 'tests/upgrade/upgrade.forum.test',
            36 => 'tests/upgrade/upgrade.locale.test',
            37 => 'tests/upgrade/upgrade.menu.test',
            38 => 'tests/upgrade/upgrade.node.test',
            39 => 'tests/upgrade/upgrade.taxonomy.test',
            40 => 'tests/upgrade/upgrade.trigger.test',
            41 => 'tests/upgrade/upgrade.translatable.test',
            42 => 'tests/upgrade/upgrade.upload.test',
            43 => 'tests/upgrade/upgrade.user.test',
            44 => 'tests/upgrade/update.aggregator.test',
            45 => 'tests/upgrade/update.trigger.test',
            46 => 'tests/upgrade/update.field.test',
            47 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node_access_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'toolbar' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'user_form_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'dashboard' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.24',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'rdf_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'rdf' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.24',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.24',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.24',
      ),
    ),
    'themes' => 
    array (
      'bartik' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'stark' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
      'seven' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.24',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
        ),
        'project' => 'drupal',
        'version' => '7.24',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.24',
        'description' => 'This platform is running Drupal 7.24',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'uberdrupal',
        ),
        'version' => '7.24',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.24',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.24',
      ),
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.24',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1384983240',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'acquia',
        ),
        'version' => '7.24',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'backup_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.7',
          'project' => 'backup_migrate',
          'datestamp' => '1368729920',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'backup_migrate',
        'version' => '7.x-2.7',
      ),
      'views_xhtml' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views_datasource/views_xhtml.module',
        'basename' => 'views_xhtml.module',
        'name' => 'views_xhtml',
        'info' => 
        array (
          'name' => 'Views XHTML',
          'description' => 'Views style plugin to render node content as XHTML microformats.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_xhtml.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views_datasource',
          'datestamp' => '1393752505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev',
      ),
      'views_xml' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views_datasource/views_xml.module',
        'basename' => 'views_xml.module',
        'name' => 'views_xml',
        'info' => 
        array (
          'name' => 'Views XML',
          'description' => 'Views style plugin to render node content as XML.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_xml.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views_datasource',
          'datestamp' => '1393752505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev',
      ),
      'views_rdf' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views_datasource/views_rdf.module',
        'basename' => 'views_rdf.module',
        'name' => 'views_rdf',
        'info' => 
        array (
          'name' => 'Views RDF',
          'description' => 'Views style plugin to render node content as RDF.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_rdf.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views_datasource',
          'datestamp' => '1393752505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev',
      ),
      'views_json' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views_datasource/views_json.module',
        'basename' => 'views_json.module',
        'name' => 'views_json',
        'info' => 
        array (
          'name' => 'Views JSON',
          'description' => 'Views style plugin to render node content as JSON.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/plugins/views_plugin_style_json.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'views_datasource',
          'datestamp' => '1393752505',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_datasource',
        'version' => '7.x-1.x-dev',
      ),
      'socialmedia' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/socialmedia/socialmedia.module',
        'basename' => 'socialmedia.module',
        'name' => 'socialmedia',
        'info' => 
        array (
          'name' => 'Social media',
          'description' => 'Example module to demonstrate module socialmedia.',
          'package' => 'Social media',
          'core' => '7.x',
          'php' => '5.1',
          'configure' => 'admin/config/media/socialmedia',
          'files' => 
          array (
            0 => 'socialmedia.module',
            1 => 'socialmedia.admin.inc',
            2 => 'socialmedia.widgetx_elements.inc',
          ),
          'version' => '7.x-1.0-beta13',
          'project' => 'socialmedia',
          'datestamp' => '1346720845',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'socialmedia',
        'version' => '7.x-1.0-beta13',
      ),
      'uuid_services' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/uuid/uuid_services/uuid_services.module',
        'basename' => 'uuid_services.module',
        'name' => 'uuid_services',
        'info' => 
        array (
          'name' => 'UUID Services',
          'description' => 'Provides integration with the Services module, like exposing a UUID entity resource.',
          'core' => '7.x',
          'package' => 'Services - resources',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'uuid',
            2 => 'entity',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'uuid',
          'datestamp' => '1328017553',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3',
      ),
      'uuid_services_example' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/uuid/uuid_services_example/uuid_services_example.module',
        'basename' => 'uuid_services_example.module',
        'name' => 'uuid_services_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'rest_server',
            1 => 'services',
            2 => 'uuid',
            3 => 'uuid_services',
          ),
          'description' => 'Example feature of a UUID service. Works well with the Deploy Example feature as a client.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'services:services:3',
            ),
            'services_endpoint' => 
            array (
              0 => 'uuid_services_example',
            ),
          ),
          'name' => 'UUID Services Example',
          'package' => 'Features',
          'php' => '5.2.4',
          'version' => '7.x-1.0-alpha3',
          'project' => 'uuid',
          'datestamp' => '1328017553',
        ),
        'schema_version' => 0,
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3',
      ),
      'uuid' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/uuid/uuid.module',
        'basename' => 'uuid.module',
        'name' => 'uuid',
        'info' => 
        array (
          'name' => 'Universally Unique ID',
          'description' => 'Extends the entity functionality and adds support for universally unique identifiers.',
          'core' => '7.x',
          'package' => 'UUID',
          'configure' => 'admin/config/system/uuid',
          'files' => 
          array (
            0 => 'uuid.test',
          ),
          'version' => '7.x-1.0-alpha3',
          'project' => 'uuid',
          'datestamp' => '1328017553',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'uuid',
        'version' => '7.x-1.0-alpha3',
      ),
      'accordion_menu' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/accordion_menu/accordion_menu.module',
        'basename' => 'accordion_menu.module',
        'name' => 'accordion_menu',
        'info' => 
        array (
          'name' => 'Accordion menu',
          'description' => 'Provide Drupal integration with jQuery UI accordion menu.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'configure' => 'admin/config/user-interface/accordion_menu',
          'version' => '7.x-1.2',
          'project' => 'accordion_menu',
          'datestamp' => '1356972656',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'accordion_menu',
        'version' => '7.x-1.2',
      ),
      'views_export' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'views' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_text_custom.inc',
            4 => 'handlers/views_handler_area_view.inc',
            5 => 'handlers/views_handler_argument.inc',
            6 => 'handlers/views_handler_argument_date.inc',
            7 => 'handlers/views_handler_argument_formula.inc',
            8 => 'handlers/views_handler_argument_many_to_one.inc',
            9 => 'handlers/views_handler_argument_null.inc',
            10 => 'handlers/views_handler_argument_numeric.inc',
            11 => 'handlers/views_handler_argument_string.inc',
            12 => 'handlers/views_handler_argument_group_by_numeric.inc',
            13 => 'handlers/views_handler_field.inc',
            14 => 'handlers/views_handler_field_counter.inc',
            15 => 'handlers/views_handler_field_boolean.inc',
            16 => 'handlers/views_handler_field_contextual_links.inc',
            17 => 'handlers/views_handler_field_custom.inc',
            18 => 'handlers/views_handler_field_date.inc',
            19 => 'handlers/views_handler_field_entity.inc',
            20 => 'handlers/views_handler_field_markup.inc',
            21 => 'handlers/views_handler_field_math.inc',
            22 => 'handlers/views_handler_field_numeric.inc',
            23 => 'handlers/views_handler_field_prerender_list.inc',
            24 => 'handlers/views_handler_field_time_interval.inc',
            25 => 'handlers/views_handler_field_serialized.inc',
            26 => 'handlers/views_handler_field_machine_name.inc',
            27 => 'handlers/views_handler_field_url.inc',
            28 => 'handlers/views_handler_filter.inc',
            29 => 'handlers/views_handler_filter_boolean_operator.inc',
            30 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            31 => 'handlers/views_handler_filter_combine.inc',
            32 => 'handlers/views_handler_filter_date.inc',
            33 => 'handlers/views_handler_filter_equality.inc',
            34 => 'handlers/views_handler_filter_entity_bundle.inc',
            35 => 'handlers/views_handler_filter_group_by_numeric.inc',
            36 => 'handlers/views_handler_filter_in_operator.inc',
            37 => 'handlers/views_handler_filter_many_to_one.inc',
            38 => 'handlers/views_handler_filter_numeric.inc',
            39 => 'handlers/views_handler_filter_string.inc',
            40 => 'handlers/views_handler_relationship.inc',
            41 => 'handlers/views_handler_relationship_groupwise_max.inc',
            42 => 'handlers/views_handler_sort.inc',
            43 => 'handlers/views_handler_sort_date.inc',
            44 => 'handlers/views_handler_sort_formula.inc',
            45 => 'handlers/views_handler_sort_group_by_numeric.inc',
            46 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            47 => 'handlers/views_handler_sort_random.inc',
            48 => 'includes/base.inc',
            49 => 'includes/handlers.inc',
            50 => 'includes/plugins.inc',
            51 => 'includes/view.inc',
            52 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            53 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            56 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            59 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            60 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            61 => 'modules/book/views_plugin_argument_default_book_root.inc',
            62 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            63 => 'modules/comment/views_handler_field_comment.inc',
            64 => 'modules/comment/views_handler_field_comment_depth.inc',
            65 => 'modules/comment/views_handler_field_comment_link.inc',
            66 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            67 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            68 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            69 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            70 => 'modules/comment/views_handler_field_comment_node_link.inc',
            71 => 'modules/comment/views_handler_field_comment_username.inc',
            72 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            73 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            74 => 'modules/comment/views_handler_field_node_comment.inc',
            75 => 'modules/comment/views_handler_field_node_new_comments.inc',
            76 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            77 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            78 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            79 => 'modules/comment/views_handler_filter_node_comment.inc',
            80 => 'modules/comment/views_handler_sort_comment_thread.inc',
            81 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            82 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            83 => 'modules/comment/views_plugin_row_comment_rss.inc',
            84 => 'modules/comment/views_plugin_row_comment_view.inc',
            85 => 'modules/contact/views_handler_field_contact_link.inc',
            86 => 'modules/field/views_handler_field_field.inc',
            87 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            88 => 'modules/field/views_handler_argument_field_list.inc',
            89 => 'modules/field/views_handler_argument_field_list_string.inc',
            90 => 'modules/field/views_handler_filter_field_list.inc',
            91 => 'modules/filter/views_handler_field_filter_format_name.inc',
            92 => 'modules/locale/views_handler_field_node_language.inc',
            93 => 'modules/locale/views_handler_filter_node_language.inc',
            94 => 'modules/locale/views_handler_argument_locale_group.inc',
            95 => 'modules/locale/views_handler_argument_locale_language.inc',
            96 => 'modules/locale/views_handler_field_locale_group.inc',
            97 => 'modules/locale/views_handler_field_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            99 => 'modules/locale/views_handler_filter_locale_group.inc',
            100 => 'modules/locale/views_handler_filter_locale_language.inc',
            101 => 'modules/locale/views_handler_filter_locale_version.inc',
            102 => 'modules/node/views_handler_argument_dates_various.inc',
            103 => 'modules/node/views_handler_argument_node_language.inc',
            104 => 'modules/node/views_handler_argument_node_nid.inc',
            105 => 'modules/node/views_handler_argument_node_type.inc',
            106 => 'modules/node/views_handler_argument_node_vid.inc',
            107 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            108 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            109 => 'modules/node/views_handler_field_node.inc',
            110 => 'modules/node/views_handler_field_node_link.inc',
            111 => 'modules/node/views_handler_field_node_link_delete.inc',
            112 => 'modules/node/views_handler_field_node_link_edit.inc',
            113 => 'modules/node/views_handler_field_node_revision.inc',
            114 => 'modules/node/views_handler_field_node_revision_link.inc',
            115 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            116 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            117 => 'modules/node/views_handler_field_node_path.inc',
            118 => 'modules/node/views_handler_field_node_type.inc',
            119 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            120 => 'modules/node/views_handler_filter_node_access.inc',
            121 => 'modules/node/views_handler_filter_node_status.inc',
            122 => 'modules/node/views_handler_filter_node_type.inc',
            123 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            124 => 'modules/node/views_plugin_argument_default_node.inc',
            125 => 'modules/node/views_plugin_argument_validate_node.inc',
            126 => 'modules/node/views_plugin_row_node_rss.inc',
            127 => 'modules/node/views_plugin_row_node_view.inc',
            128 => 'modules/profile/views_handler_field_profile_date.inc',
            129 => 'modules/profile/views_handler_field_profile_list.inc',
            130 => 'modules/profile/views_handler_filter_profile_selection.inc',
            131 => 'modules/search/views_handler_argument_search.inc',
            132 => 'modules/search/views_handler_field_search_score.inc',
            133 => 'modules/search/views_handler_filter_search.inc',
            134 => 'modules/search/views_handler_sort_search_score.inc',
            135 => 'modules/search/views_plugin_row_search_view.inc',
            136 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            137 => 'modules/system/views_handler_argument_file_fid.inc',
            138 => 'modules/system/views_handler_field_file.inc',
            139 => 'modules/system/views_handler_field_file_extension.inc',
            140 => 'modules/system/views_handler_field_file_filemime.inc',
            141 => 'modules/system/views_handler_field_file_uri.inc',
            142 => 'modules/system/views_handler_field_file_status.inc',
            143 => 'modules/system/views_handler_filter_file_status.inc',
            144 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            145 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            148 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            149 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            150 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            151 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            152 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            153 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            155 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            156 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            157 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            158 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            159 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            160 => 'modules/system/views_handler_filter_system_type.inc',
            161 => 'modules/translation/views_handler_argument_node_tnid.inc',
            162 => 'modules/translation/views_handler_field_node_link_translate.inc',
            163 => 'modules/translation/views_handler_field_node_translation_link.inc',
            164 => 'modules/translation/views_handler_filter_node_tnid.inc',
            165 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            166 => 'modules/translation/views_handler_relationship_translation.inc',
            167 => 'modules/user/views_handler_argument_user_uid.inc',
            168 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            169 => 'modules/user/views_handler_field_user.inc',
            170 => 'modules/user/views_handler_field_user_language.inc',
            171 => 'modules/user/views_handler_field_user_link.inc',
            172 => 'modules/user/views_handler_field_user_link_cancel.inc',
            173 => 'modules/user/views_handler_field_user_link_edit.inc',
            174 => 'modules/user/views_handler_field_user_mail.inc',
            175 => 'modules/user/views_handler_field_user_name.inc',
            176 => 'modules/user/views_handler_field_user_permissions.inc',
            177 => 'modules/user/views_handler_field_user_picture.inc',
            178 => 'modules/user/views_handler_field_user_roles.inc',
            179 => 'modules/user/views_handler_filter_user_current.inc',
            180 => 'modules/user/views_handler_filter_user_name.inc',
            181 => 'modules/user/views_handler_filter_user_permissions.inc',
            182 => 'modules/user/views_handler_filter_user_roles.inc',
            183 => 'modules/user/views_plugin_argument_default_current_user.inc',
            184 => 'modules/user/views_plugin_argument_default_user.inc',
            185 => 'modules/user/views_plugin_argument_validate_user.inc',
            186 => 'modules/user/views_plugin_row_user_view.inc',
            187 => 'plugins/views_plugin_access.inc',
            188 => 'plugins/views_plugin_access_none.inc',
            189 => 'plugins/views_plugin_access_perm.inc',
            190 => 'plugins/views_plugin_access_role.inc',
            191 => 'plugins/views_plugin_argument_default.inc',
            192 => 'plugins/views_plugin_argument_default_php.inc',
            193 => 'plugins/views_plugin_argument_default_fixed.inc',
            194 => 'plugins/views_plugin_argument_default_raw.inc',
            195 => 'plugins/views_plugin_argument_validate.inc',
            196 => 'plugins/views_plugin_argument_validate_numeric.inc',
            197 => 'plugins/views_plugin_argument_validate_php.inc',
            198 => 'plugins/views_plugin_cache.inc',
            199 => 'plugins/views_plugin_cache_none.inc',
            200 => 'plugins/views_plugin_cache_time.inc',
            201 => 'plugins/views_plugin_display.inc',
            202 => 'plugins/views_plugin_display_attachment.inc',
            203 => 'plugins/views_plugin_display_block.inc',
            204 => 'plugins/views_plugin_display_default.inc',
            205 => 'plugins/views_plugin_display_embed.inc',
            206 => 'plugins/views_plugin_display_extender.inc',
            207 => 'plugins/views_plugin_display_feed.inc',
            208 => 'plugins/views_plugin_display_page.inc',
            209 => 'plugins/views_plugin_exposed_form_basic.inc',
            210 => 'plugins/views_plugin_exposed_form.inc',
            211 => 'plugins/views_plugin_exposed_form_input_required.inc',
            212 => 'plugins/views_plugin_localization_core.inc',
            213 => 'plugins/views_plugin_localization.inc',
            214 => 'plugins/views_plugin_localization_none.inc',
            215 => 'plugins/views_plugin_pager.inc',
            216 => 'plugins/views_plugin_pager_full.inc',
            217 => 'plugins/views_plugin_pager_mini.inc',
            218 => 'plugins/views_plugin_pager_none.inc',
            219 => 'plugins/views_plugin_pager_some.inc',
            220 => 'plugins/views_plugin_query.inc',
            221 => 'plugins/views_plugin_query_default.inc',
            222 => 'plugins/views_plugin_row.inc',
            223 => 'plugins/views_plugin_row_fields.inc',
            224 => 'plugins/views_plugin_row_rss_fields.inc',
            225 => 'plugins/views_plugin_style.inc',
            226 => 'plugins/views_plugin_style_default.inc',
            227 => 'plugins/views_plugin_style_grid.inc',
            228 => 'plugins/views_plugin_style_list.inc',
            229 => 'plugins/views_plugin_style_jump_menu.inc',
            230 => 'plugins/views_plugin_style_rss.inc',
            231 => 'plugins/views_plugin_style_summary.inc',
            232 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            233 => 'plugins/views_plugin_style_summary_unformatted.inc',
            234 => 'plugins/views_plugin_style_table.inc',
            235 => 'tests/handlers/views_handler_area_text.test',
            236 => 'tests/handlers/views_handler_argument_null.test',
            237 => 'tests/handlers/views_handler_argument_string.test',
            238 => 'tests/handlers/views_handler_field.test',
            239 => 'tests/handlers/views_handler_field_boolean.test',
            240 => 'tests/handlers/views_handler_field_custom.test',
            241 => 'tests/handlers/views_handler_field_counter.test',
            242 => 'tests/handlers/views_handler_field_date.test',
            243 => 'tests/handlers/views_handler_field_file_size.test',
            244 => 'tests/handlers/views_handler_field_math.test',
            245 => 'tests/handlers/views_handler_field_url.test',
            246 => 'tests/handlers/views_handler_field_xss.test',
            247 => 'tests/handlers/views_handler_filter_combine.test',
            248 => 'tests/handlers/views_handler_filter_date.test',
            249 => 'tests/handlers/views_handler_filter_equality.test',
            250 => 'tests/handlers/views_handler_filter_in_operator.test',
            251 => 'tests/handlers/views_handler_filter_numeric.test',
            252 => 'tests/handlers/views_handler_filter_string.test',
            253 => 'tests/handlers/views_handler_sort_random.test',
            254 => 'tests/handlers/views_handler_sort_date.test',
            255 => 'tests/handlers/views_handler_sort.test',
            256 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            257 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            258 => 'tests/plugins/views_plugin_display.test',
            259 => 'tests/styles/views_plugin_style_jump_menu.test',
            260 => 'tests/styles/views_plugin_style.test',
            261 => 'tests/styles/views_plugin_style_unformatted.test',
            262 => 'tests/views_access.test',
            263 => 'tests/views_analyze.test',
            264 => 'tests/views_basic.test',
            265 => 'tests/views_argument_default.test',
            266 => 'tests/views_argument_validator.test',
            267 => 'tests/views_exposed_form.test',
            268 => 'tests/field/views_fieldapi.test',
            269 => 'tests/views_glossary.test',
            270 => 'tests/views_groupby.test',
            271 => 'tests/views_handlers.test',
            272 => 'tests/views_module.test',
            273 => 'tests/views_pager.test',
            274 => 'tests/views_plugin_localization_test.inc',
            275 => 'tests/views_translatable.test',
            276 => 'tests/views_query.test',
            277 => 'tests/views_upgrade.test',
            278 => 'tests/views_test.views_default.inc',
            279 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            280 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            281 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            282 => 'tests/user/views_handler_field_user_name.test',
            283 => 'tests/user/views_user_argument_default.test',
            284 => 'tests/user/views_user_argument_validate.test',
            285 => 'tests/user/views_user.test',
            286 => 'tests/views_cache.test',
            287 => 'tests/views_view.test',
            288 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'views_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.5',
          'project' => 'views',
          'datestamp' => '1345829394',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.5',
      ),
      'feeds_xpathparser' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds_xpathparser/feeds_xpathparser.module',
        'basename' => 'feeds_xpathparser.module',
        'name' => 'feeds_xpathparser',
        'info' => 
        array (
          'name' => 'Feeds XPath Parser',
          'description' => 'Parse an XML or HTML document using XPath.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'files' => 
          array (
            0 => 'FeedsXPathParserBase.inc',
            1 => 'FeedsXPathParserHTML.inc',
            2 => 'FeedsXPathParserXML.inc',
            3 => 'FeedsXPathParserQueryParser.inc',
            4 => 'FeedsXPathParserDOMXPath.inc',
            5 => 'tests/feeds_xpathparser.test',
            6 => 'tests/feeds_xpathparser_parser_html.test',
            7 => 'tests/feeds_xpathparser_parser_xml.test',
            8 => 'tests/feeds_xpathparser_query_parser.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'feeds_xpathparser',
          'datestamp' => '1368138912',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'feeds_xpathparser',
        'version' => '7.x-1.0-beta4',
      ),
      'imce' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '7.x',
          'package' => 'Media',
          'configure' => 'admin/config/media/imce',
          'version' => '7.x-1.7',
          'project' => 'imce',
          'datestamp' => '1359476607',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'imce',
        'version' => '7.x-1.7',
      ),
      'features_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/features/tests/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'taxonomy',
            4 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'taxonomy' => 
            array (
              0 => 'taxonomy_features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'hidden' => true,
          'version' => '7.x-2.0-beta1',
          'project' => 'features',
          'datestamp' => '1352395006',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-2.0-beta1',
      ),
      'features' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'features',
          'datestamp' => '1352395006',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.0-beta1',
      ),
      'advanced_forum' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/advanced_forum/advanced_forum.module',
        'basename' => 'advanced_forum.module',
        'name' => 'advanced_forum',
        'info' => 
        array (
          'name' => 'Advanced Forum',
          'description' => 'Enables the look and feel of other popular forum software.',
          'version' => '7.x-2.1',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'ctools',
            2 => 'views',
          ),
          'configure' => 'admin/config/content/advanced-forum',
          'files' => 
          array (
            0 => 'includes/views/advanced_forum_handler_field_node_topic_icon.inc',
            1 => 'includes/views/advanced_forum_handler_field_node_topic_pager.inc',
            2 => 'includes/views/advanced_forum_plugin_style_forum_topic_list.inc',
          ),
          'core' => '7.x',
          'project' => 'advanced_forum',
          'datestamp' => '1361268675',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'advanced_forum',
        'version' => '7.x-2.1',
      ),
      'entity_feature' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.0',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.0',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'entity_token' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0',
          'project' => 'entity',
          'datestamp' => '1356471145',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0',
      ),
      'pathauto' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'page_manager' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'stylizer' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_export_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/tests/ctools_export_test/ctools_export_test.module',
        'basename' => 'ctools_export_test.module',
        'name' => 'ctools_export_test',
        'info' => 
        array (
          'name' => 'CTools export test',
          'description' => 'CTools export test module',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'ctools_export.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
            2 => 'css.test',
            3 => 'context.test',
            4 => 'math_expression.test',
            5 => 'math_expression_stack.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'bulk_export' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'views_content' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'ctools' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'ctools',
          'datestamp' => '1365013512',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6008',
        'project' => 'ctools',
        'version' => '7.x-1.3',
      ),
      'metatag_dc' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag_dc/metatag_dc.module',
        'basename' => 'metatag_dc.module',
        'name' => 'metatag_dc',
        'info' => 
        array (
          'name' => 'Meta tags: Dublin Core',
          'description' => 'Provides the fifteen <a href="http://dublincore.org/documents/dces/">Dublin Core Metadata Element Set 1.1</a> meta tags from the <a href="http://dublincore.org/">Dublin Core Metadata Institute</a>.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag_ui/metatag_ui.module',
        'basename' => 'metatag_ui.module',
        'name' => 'metatag_ui',
        'info' => 
        array (
          'name' => 'Meta tag UI',
          'description' => 'DEPRECATED admin interface for the Meta tag API, this functionality has be merged into the main module.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
            1 => 'ctools',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_twitter_cards' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.module',
        'basename' => 'metatag_twitter_cards.module',
        'name' => 'metatag_twitter_cards',
        'info' => 
        array (
          'name' => 'Meta tags: Twitter Cards',
          'description' => 'Provides support for Twitter\'s Card meta tags. NOTE: Only use if the site supports SSL as all URLs *must* be secured via HTTPS.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_opengraph' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag_opengraph/metatag_opengraph.module',
        'basename' => 'metatag_opengraph.module',
        'name' => 'metatag_opengraph',
        'info' => 
        array (
          'name' => 'Meta tags: Open Graph',
          'description' => 'Provides support for open graph meta tags.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/tests/metatag_test.module',
        'basename' => 'metatag_test.module',
        'name' => 'metatag_test',
        'info' => 
        array (
          'name' => 'Meta Tag Test',
          'description' => 'Testing module for metatag.module',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'metatag',
          ),
          'hidden' => true,
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag_context' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag_context/metatag_context.module',
        'basename' => 'metatag_context.module',
        'name' => 'metatag_context',
        'info' => 
        array (
          'name' => 'Meta tags: Context',
          'description' => 'Assigned Meta tags using Context definitions, allowing them to be assigned by path and other criteria.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'metatag',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'metatag' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/metatag/metatag.module',
        'basename' => 'metatag.module',
        'name' => 'metatag',
        'info' => 
        array (
          'name' => 'Meta tags',
          'description' => 'Adds support and an API to implement meta tags.',
          'package' => 'Meta tags',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'token',
            1 => 'ctools',
          ),
          'configure' => 'admin/config/search/metatags',
          'files' => 
          array (
            0 => 'metatag.inc',
            1 => 'metatag.test',
          ),
          'version' => '7.x-1.0-beta4',
          'project' => 'metatag',
          'datestamp' => '1353209208',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'metatag',
        'version' => '7.x-1.0-beta4',
      ),
      'calendar' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/calendar_multiday.css',
            ),
          ),
          'files' => 
          array (
            0 => 'calendar.install',
            1 => 'calendar.module',
            2 => 'includes/calendar.views.inc',
            3 => 'includes/calendar_plugin_style.inc',
            4 => 'includes/calendar_plugin_row.inc',
            5 => 'includes/calendar.views_template.inc',
            6 => 'theme/theme.inc',
            7 => 'theme/calendar-style.tpl.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'calendar',
          'datestamp' => '1337429753',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'calendar',
        'version' => '7.x-3.4',
      ),
      'feeds_news' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'feeds',
            2 => 'views',
          ),
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'name' => 'Feeds News',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_import' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'description' => 'An example of a node importer and a user importer.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'name' => 'Feeds Import',
          'package' => 'Feeds',
          'php' => '5.2.4',
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds_tests' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds/tests/feeds_tests.module',
        'basename' => 'feeds_tests.module',
        'name' => 'feeds_tests',
        'info' => 
        array (
          'name' => 'Feeds module tests',
          'description' => 'Support module for Feeds related testing.',
          'package' => 'Testing',
          'version' => '7.x-2.0-alpha7',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'feeds_test.module',
          ),
          'hidden' => true,
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'feeds' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsImporter.inc',
            2 => 'includes/FeedsSource.inc',
            3 => 'libraries/ParserCSV.inc',
            4 => 'libraries/http_request.inc',
            5 => 'libraries/PuSHSubscriber.inc',
            6 => 'tests/feeds.test',
            7 => 'tests/feeds_date_time.test',
            8 => 'tests/feeds_mapper_date.test',
            9 => 'tests/feeds_mapper_field.test',
            10 => 'tests/feeds_mapper_file.test',
            11 => 'tests/feeds_mapper_path.test',
            12 => 'tests/feeds_mapper_profile.test',
            13 => 'tests/feeds_mapper.test',
            14 => 'tests/feeds_mapper_config.test',
            15 => 'tests/feeds_fetcher_file.test',
            16 => 'tests/feeds_processor_node.test',
            17 => 'tests/feeds_processor_term.test',
            18 => 'tests/feeds_processor_user.test',
            19 => 'tests/feeds_scheduler.test',
            20 => 'tests/feeds_mapper_link.test',
            21 => 'tests/feeds_mapper_taxonomy.test',
            22 => 'tests/parser_csv.test',
            23 => 'views/feeds_views_handler_argument_importer_id.inc',
            24 => 'views/feeds_views_handler_field_importer_name.inc',
            25 => 'views/feeds_views_handler_field_log_message.inc',
            26 => 'views/feeds_views_handler_field_severity.inc',
            27 => 'views/feeds_views_handler_field_source.inc',
            28 => 'views/feeds_views_handler_filter_severity.inc',
          ),
          'version' => '7.x-2.0-alpha7',
          'project' => 'feeds',
          'datestamp' => '1351111319',
          'php' => '5.2.4',
        ),
        'schema_version' => '7207',
        'project' => 'feeds',
        'version' => '7.x-2.0-alpha7',
      ),
      'fontyourface_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
        'basename' => 'fontyourface_ui.module',
        'name' => 'fontyourface_ui',
        'info' => 
        array (
          'name' => '@font-your-face UI',
          'description' => 'Administrative interface for managing fonts.',
          'package' => '@font-your-face',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'views',
          ),
          'configure' => 'admin/config/user-interface/fontyourface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/fontyourface.views_default.inc',
            1 => 'views/views_handler_field_fontyourface_font.inc',
            2 => 'views/views_handler_field_fontyourface_foundry.inc',
            3 => 'views/views_handler_field_fontyourface_license.inc',
            4 => 'views/views_handler_field_fontyourface_provider.inc',
            5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
            6 => 'views/views_handler_filter_tag_font_tid.inc',
            7 => 'views/views_handler_relationship_fontyourface_tag.inc',
            8 => 'views/views_handler_field_fontyourface_preview.inc',
            9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
            10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
            11 => 'views/views_handler_filter_fontyourface_provider.inc',
            12 => 'views/views_handler_filter_fontyourface_foundry.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'edge_fonts_scraper' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/edge_fonts/ef_scraper/edge_fonts_scraper.module',
        'basename' => 'edge_fonts_scraper.module',
        'name' => 'edge_fonts_scraper',
        'info' => 
        array (
          'name' => 'Edge Fonts Scraper',
          'description' => 'Scrapes font info from edgefonts.com',
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'edge_fonts' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/edge_fonts/edge_fonts.module',
        'basename' => 'edge_fonts.module',
        'name' => 'edge_fonts',
        'info' => 
        array (
          'name' => 'Edge Fonts',
          'description' => '@font-your-face provider for Edge Fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'fontdeck' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/fontdeck/fontdeck.module',
        'basename' => 'fontdeck.module',
        'name' => 'fontdeck',
        'info' => 
        array (
          'name' => 'Fontdeck',
          'description' => '@font-your-face provider of fonts from Fontdeck.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'fontdeck.install',
            1 => 'fontdeck.module',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'google_fonts_api' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/google_fonts_api/google_fonts_api.module',
        'basename' => 'google_fonts_api.module',
        'name' => 'google_fonts_api',
        'info' => 
        array (
          'name' => 'Google Fonts API',
          'description' => '@font-your-face provider with Google fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/google_fonts_api.views_default.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'local_fonts' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/local_fonts/local_fonts.module',
        'basename' => 'local_fonts.module',
        'name' => 'local_fonts',
        'info' => 
        array (
          'name' => 'Local Fonts',
          'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'font_reference' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/font_reference/font_reference.module',
        'basename' => 'font_reference.module',
        'name' => 'font_reference',
        'info' => 
        array (
          'name' => 'Font Reference',
          'description' => 'Defines a field type for referencing a font from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'field',
            2 => 'options',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'typekit_api' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/typekit_api/typekit_api.module',
        'basename' => 'typekit_api.module',
        'name' => 'typekit_api',
        'info' => 
        array (
          'name' => 'Typekit API',
          'description' => '@font-your-face provider with Typekit.com fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'fonts_com' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/fonts_com/fonts_com.module',
        'basename' => 'fonts_com.module',
        'name' => 'fonts_com',
        'info' => 
        array (
          'name' => 'Fonts.com',
          'description' => '@font-your-face provider of fonts from Fonts.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'api.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'fontyourface_wysiwyg' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/fontyourface_wysiwyg/fontyourface_wysiwyg.module',
        'basename' => 'fontyourface_wysiwyg.module',
        'name' => 'fontyourface_wysiwyg',
        'info' => 
        array (
          'name' => 'WYSIWYG for @font-your-face',
          'description' => 'Adds list of enabled fonts to WYSIWYG.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'wysiwyg',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface_wysiwyg.module',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'fontsquirrel' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/modules/fontsquirrel/fontsquirrel.module',
        'basename' => 'fontsquirrel.module',
        'name' => 'fontsquirrel',
        'info' => 
        array (
          'name' => 'Font Squirrel API',
          'description' => '@font-your-face provider with Font Squirrel fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'fontyourface' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/fontyourface/fontyourface.module',
        'basename' => 'fontyourface.module',
        'name' => 'fontyourface',
        'info' => 
        array (
          'name' => '@font-your-face',
          'description' => 'Manages web fonts.',
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'fontyourface',
          'datestamp' => '1352782302',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'fontyourface',
        'version' => '7.x-2.6',
      ),
      'arrange_fields' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/arrange_fields/arrange_fields.module',
        'basename' => 'arrange_fields.module',
        'name' => 'arrange_fields',
        'info' => 
        array (
          'name' => 'Arrange Fields',
          'description' => 'Drag and drop form fields into any position.',
          'configure' => 'admin/config/arrange-fields',
          'tags' => 
          array (
            0 => 'arrange_fields',
          ),
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'arrange_fields',
          'datestamp' => '1359471184',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'project' => 'arrange_fields',
        'version' => '7.x-1.11',
      ),
      'module_filter' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-1.7',
          'project' => 'module_filter',
          'datestamp' => '1341518501',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'module_filter',
        'version' => '7.x-1.7',
      ),
      'image_captcha' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/image_captcha',
          'files' => 
          array (
            0 => 'image_captcha.install',
            1 => 'image_captcha.module',
            2 => 'image_captcha.admin.inc',
            3 => 'image_captcha.user.inc',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'captcha',
          'datestamp' => '1380557443',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'captcha',
        'version' => '7.x-1.0+4-dev',
      ),
      'captcha' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha',
          'files' => 
          array (
            0 => 'captcha.module',
            1 => 'captcha.inc',
            2 => 'captcha.admin.inc',
            3 => 'captcha.install',
            4 => 'captcha.test',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'captcha',
          'datestamp' => '1380557443',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'captcha',
        'version' => '7.x-1.0+4-dev',
      ),
      'recaptcha_mailhide' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/recaptcha/recaptcha_mailhide.module',
        'basename' => 'recaptcha_mailhide.module',
        'name' => 'recaptcha_mailhide',
        'info' => 
        array (
          'name' => 'reCAPTCHA Mailhide',
          'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha_mailhide.module',
          ),
          'version' => '7.x-1.9',
          'project' => 'recaptcha',
          'datestamp' => '1359998293',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.9',
      ),
      'recaptcha' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/recaptcha/recaptcha.module',
        'basename' => 'recaptcha.module',
        'name' => 'recaptcha',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha.admin.inc',
            1 => 'recaptcha.module',
            2 => 'recaptcha.install',
          ),
          'version' => '7.x-1.9',
          'project' => 'recaptcha',
          'datestamp' => '1359998293',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.9',
      ),
      'token_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'token' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'webform_validation' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/webform_validation/webform_validation.module',
        'basename' => 'webform_validation.module',
        'name' => 'webform_validation',
        'info' => 
        array (
          'name' => 'Webform Validation',
          'description' => 'Add validation rules to webforms',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'webform',
          ),
          'package' => 'Webform',
          'files' => 
          array (
            0 => 'webform_validation.admin.inc',
            1 => 'webform_validation.install',
            2 => 'webform_validation.module',
            3 => 'webform_validation.rules.inc',
            4 => 'webform_validation.validators.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'webform_validation',
          'datestamp' => '1322683247',
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'webform_validation',
        'version' => '7.x-1.1',
      ),
      'webform_conditional' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/webform_conditional/webform_conditional.module',
        'basename' => 'webform_conditional.module',
        'name' => 'webform_conditional',
        'info' => 
        array (
          'name' => 'Webform Conditional',
          'description' => 'Allows Webform components to be hidden dependent on the value of other components',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
          ),
          'files' => 
          array (
            0 => 'webform_conditional.install',
            1 => 'webform_conditional.module',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'webform_conditional',
          'datestamp' => '1334510511',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'webform_conditional',
        'version' => '7.x-1.0-beta1',
      ),
      'backup_migrate_files' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/backup_migrate_files/backup_migrate_files.module',
        'basename' => 'backup_migrate_files.module',
        'name' => 'backup_migrate_files',
        'info' => 
        array (
          'name' => 'Backup and Migrate Files',
          'description' => 'Add file backup and restore support to backup and migrate.',
          'dependencies' => 
          array (
            0 => 'backup_migrate',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate_files.install',
            1 => 'backup_migrate_files.module',
            2 => 'includes/destinations.filesource.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'backup_migrate_files',
          'datestamp' => '1380555221',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'backup_migrate_files',
        'version' => '7.x-1.x-dev',
      ),
      'quicktabs_tabstyles' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
        'basename' => 'quicktabs_tabstyles.module',
        'name' => 'quicktabs_tabstyles',
        'info' => 
        array (
          'name' => 'Quicktabs Styles',
          'description' => 'Adds predefined tab styles to choose from per Quicktabs instance.',
          'core' => '7.x',
          'configure' => 'admin/structure/quicktabs/styles',
          'dependencies' => 
          array (
            0 => 'quicktabs',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'quicktabs' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/quicktabs/quicktabs.module',
        'basename' => 'quicktabs.module',
        'name' => 'quicktabs',
        'info' => 
        array (
          'name' => 'Quicktabs',
          'description' => 'Render content with tabs and other display styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'quicktabs.module',
            1 => 'quicktabs.classes.inc',
            2 => 'includes/quicktabs_style_plugin.inc',
            3 => 'tests/quicktabs.test',
          ),
          'configure' => 'admin/structure/quicktabs',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'ckeditor' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'ckeditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'description' => 'Enables CKEditor (WYSIWYG HTML editor) for use instead of plain text fields.',
          'core' => '7.x',
          'package' => 'User interface',
          'configure' => 'admin/config/content/ckeditor',
          'files' => 
          array (
            0 => 'includes/ckeditor.user.inc',
          ),
          'version' => '7.x-1.12',
          'project' => 'ckeditor',
          'datestamp' => '1356180966',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ckeditor',
        'version' => '7.x-1.12',
      ),
      'help_example' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'files' => 
          array (
            0 => 'help_example.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'advanced_help' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'advanced_help.module',
            1 => 'advanced_help.install',
          ),
          'version' => '7.x-1.0',
          'project' => 'advanced_help',
          'datestamp' => '1321022730',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.0',
      ),
      'libraries_test' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/libraries/tests/libraries_test.module',
        'basename' => 'libraries_test.module',
        'name' => 'libraries_test',
        'info' => 
        array (
          'name' => 'Libraries test module',
          'description' => 'Tests library detection and loading.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'hidden' => true,
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'libraries' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'libraries',
          'datestamp' => '1362848412',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.1',
      ),
      'widgets_service_links' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/widgets/modules/widgets_service_links/widgets_service_links.module',
        'basename' => 'widgets_service_links.module',
        'name' => 'widgets_service_links',
        'info' => 
        array (
          'name' => 'Widgets Service links',
          'description' => 'Enables links from Service links module to be used as widget elements',
          'package' => 'Widgets',
          'dependencies' => 
          array (
            0 => 'widgets',
            1 => 'service_links',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-rc1',
          'project' => 'widgets',
          'datestamp' => '1346720847',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'widgets',
        'version' => '7.x-1.0-rc1',
      ),
      'widgets' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/widgets/widgets.module',
        'basename' => 'widgets.module',
        'name' => 'widgets',
        'info' => 
        array (
          'name' => 'Widgets',
          'description' => 'Enables easy management of code snipets like Twitter, Facebook and Google+ buttons.',
          'package' => 'Widgets',
          'core' => '7.x',
          'configure' => 'admin/structure/widgets-sets',
          'version' => '7.x-1.0-rc1',
          'project' => 'widgets',
          'datestamp' => '1346720847',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'widgets',
        'version' => '7.x-1.0-rc1',
      ),
      'node_export_dependency' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/node_export/modules/node_export_dependency/node_export_dependency.module',
        'basename' => 'node_export_dependency.module',
        'name' => 'node_export_dependency',
        'info' => 
        array (
          'name' => 'Node export dependency (experimental)',
          'description' => 'Helps maintain relationships to dependent entities.  Intended to make Node export relation obsolete.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_relation' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/node_export/modules/node_export_relation/node_export_relation.module',
        'basename' => 'node_export_relation.module',
        'name' => 'node_export_relation',
        'info' => 
        array (
          'name' => 'Node export relation (deprecated)',
          'description' => 'Helps maintain relationships.  Supports node references, taxonomy, and organic groups.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_features' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/node_export/modules/node_export_features/node_export_features.module',
        'basename' => 'node_export_features.module',
        'name' => 'node_export_features',
        'info' => 
        array (
          'name' => 'Node export features',
          'description' => 'Adds Features support to Node export, so you can put your exports into Features modules.',
          'dependencies' => 
          array (
            0 => 'node_export',
            1 => 'uuid',
            2 => 'features',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export_feeds' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/node_export/modules/node_export_feeds/node_export_feeds.module',
        'basename' => 'node_export_feeds.module',
        'name' => 'node_export_feeds',
        'info' => 
        array (
          'name' => 'Node export feeds',
          'description' => 'Node export feeds importer.  This is a more advanced importer than the one built into node export, but tricky to use.',
          'core' => '7.x',
          'package' => 'Node export',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'node_export',
          ),
          'files' => 
          array (
            0 => 'FeedsNodeExportParser.inc',
            1 => 'FeedsNodeExportProcessor.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'node_export' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/node_export/node_export.module',
        'basename' => 'node_export.module',
        'name' => 'node_export',
        'info' => 
        array (
          'name' => 'Node export',
          'description' => 'Allows users to export content and then import into another Drupal installation.',
          'dependencies' => 
          array (
            0 => 'uuid',
          ),
          'core' => '7.x',
          'package' => 'Node export',
          'configure' => 'admin/config/content/node_export',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_export.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'node_export',
          'datestamp' => '1345435979',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'node_export',
        'version' => '7.x-3.0',
      ),
      'jquery_update' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.3',
          'project' => 'jquery_update',
          'datestamp' => '1360375905',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.3',
      ),
      'filefield_nginx_progress' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/modules/o_contrib_seven/filefield_nginx_progress/filefield_nginx_progress/filefield_nginx_progress.module',
        'basename' => 'filefield_nginx_progress.module',
        'name' => 'filefield_nginx_progress',
        'info' => 
        array (
          'name' => 'FileField Nginx Progress',
          'description' => 'Adds upload progress functionality for Nginx',
          'files' => 
          array (
            0 => 'filefield_nginx_progress.install',
            1 => 'filefield_nginx_progress.module',
          ),
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'package' => 'CCK',
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.3',
          'project' => 'filefield_nginx_progress',
          'datestamp' => '1350833210',
        ),
        'schema_version' => '7100',
        'project' => 'filefield_nginx_progress',
        'version' => '7.x-2.3',
      ),
      'robotstxt' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/modules/o_contrib_seven/robotstxt/robotstxt/robotstxt.module',
        'basename' => 'robotstxt.module',
        'name' => 'robotstxt',
        'info' => 
        array (
          'name' => 'robots.txt',
          'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'robotstxt.module',
            1 => 'robotstxt.admin.inc',
            2 => 'robotstxt.install',
          ),
          'configure' => 'admin/config/search/robotstxt',
          'version' => '7.x-1.1+0-dev',
          'project' => 'robotstxt',
          'datestamp' => '1380626026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'robotstxt',
        'version' => '7.x-1.1+0-dev',
      ),
      'date_ical' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date_ical/date_ical.module',
        'basename' => 'date_ical.module',
        'name' => 'date_ical',
        'info' => 
        array (
          'name' => 'Date iCal',
          'description' => 'Allows creation of iCal feeds using Views, and provides a Feeds plugin for parsing iCal feeds.',
          'package' => 'Date/Time',
          'php' => '5.3',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views (>=7.x-3.5)',
            1 => 'date_views',
            2 => 'entity',
            3 => 'libraries (>=7.x-2.0)',
            4 => 'date',
            5 => 'date_api',
          ),
          'files' => 
          array (
            0 => 'includes/date_ical_plugin_row_ical_entity.inc',
            1 => 'includes/date_ical_plugin_style_ical_feed.inc',
            2 => 'includes/DateIcalFeedParser.inc',
            3 => 'includes/DateIcalIcalcreatorParser.inc',
            4 => 'includes/DateIcalDateModuleParser.inc',
            5 => 'tests/date_ical_parser.test',
            6 => 'tests/date_ical_parser_text.test',
            7 => 'tests/date_ical_parser_link.test',
            8 => 'tests/date_ical_parser_date.test',
            9 => 'tests/date_ical_parser_location.test',
            10 => 'tests/date_ical_parser_categories.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'date_ical',
          'datestamp' => '1369428971',
        ),
        'schema_version' => 0,
        'project' => 'date_ical',
        'version' => '7.x-2.8',
      ),
      'simple_gmap' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/simple_gmap/simple_gmap.module',
        'basename' => 'simple_gmap.module',
        'name' => 'simple_gmap',
        'info' => 
        array (
          'name' => 'Simple Google Maps',
          'description' => 'Provides a Google Maps link/map formatter for simple Text fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simple_gmap.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'simple_gmap',
          'datestamp' => '1382573429',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'simple_gmap',
        'version' => '7.x-1.1',
      ),
      'filedepot' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/filedepot/filedepot.module',
        'basename' => 'filedepot.module',
        'name' => 'filedepot',
        'info' => 
        array (
          'name' => 'Filedepot',
          'description' => 'Filedepot File Management System',
          'dependencies' => 
          array (
            0 => 'libraries',
            1 => 'ctools',
            2 => 'file',
          ),
          'configure' => 'admin/config/media/filedepot',
          'core' => '7.x',
          'php' => '5.x;',
          'package' => 'File management',
          'version' => '7.x-1.0',
          'project' => 'filedepot',
          'datestamp' => '1359489846',
        ),
        'schema_version' => '7004',
        'project' => 'filedepot',
        'version' => '7.x-1.0',
      ),
      'feeds_tamper_ui' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds_tamper/feeds_tamper_ui/feeds_tamper_ui.module',
        'basename' => 'feeds_tamper_ui.module',
        'name' => 'feeds_tamper_ui',
        'info' => 
        array (
          'name' => 'Feeds Tamper Admin UI',
          'description' => 'Administrative UI for Feeds Tamper module.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds_tamper',
            1 => 'feeds_ui',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper_ui.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'feeds_tamper',
          'datestamp' => '1349522814',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0-beta4',
      ),
      'feeds_tamper' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/feeds_tamper/feeds_tamper.module',
        'basename' => 'feeds_tamper.module',
        'name' => 'feeds_tamper',
        'info' => 
        array (
          'name' => 'Feeds Tamper',
          'description' => 'Modify feeds data before it gets saved.',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'files' => 
          array (
            0 => 'tests/feeds_tamper.test',
            1 => 'tests/feeds_tamper_plugins.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-beta4',
          'project' => 'feeds_tamper',
          'datestamp' => '1349522814',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'feeds_tamper',
        'version' => '7.x-1.0-beta4',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'google_analytics',
          'datestamp' => '1351810914',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'google_analytics',
        'version' => '7.x-1.3',
      ),
      'admin_devel' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'webform' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.18',
          'project' => 'webform',
          'datestamp' => '1336890411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7320',
        'project' => 'webform',
        'version' => '7.x-3.18',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          'php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
          ),
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
        ),
        'schema_version' => 0,
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          'files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
            2 => 'JobScheduler.inc',
            3 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'version' => '7.x-2.0-alpha3',
          'project' => 'job_scheduler',
          'datestamp' => '1336466457',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7101',
        'project' => 'job_scheduler',
        'version' => '7.x-2.0-alpha3',
      ),
      'date_views' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_all_day' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_tools' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_context' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_api' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.6',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_migrate' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_popup' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
      'date' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/modules/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.6',
          'project' => 'date',
          'datestamp' => '1344850024',
        ),
        'schema_version' => '7004',
        'project' => 'date',
        'version' => '7.x-2.6',
      ),
    ),
    'themes' => 
    array (
      'bootstrap' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'version' => '7.x-2.0-beta2',
          'core' => '7.x',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'bootstrap/css/bootstrap.css',
              1 => 'bootstrap/css/bootstrap-responsive.css',
              2 => 'css/style.css',
            ),
          ),
          'settings' => 
          array (
            'toggle_name' => '0',
            'toggle_search' => '1',
            'cdn_bootstrap' => '0',
            'cdn_jquery' => '0',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'modules/aggregator/aggregator.css',
              1 => 'modules/block/block.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/node/node.css',
              11 => 'modules/openid/openid.css',
              12 => 'modules/poll/poll.css',
              13 => 'modules/search/search.css',
              14 => 'modules/statistics/statistics.css',
              15 => 'modules/syslog/syslog.css',
              16 => 'modules/system/maintenance.css',
              17 => 'modules/system/system.maintenance.css',
              18 => 'modules/system/system.menus.css',
              19 => 'modules/system/system.messages.css',
              20 => 'modules/system/system.theme.css',
              21 => 'modules/taxonomy/taxonomy.css',
              22 => 'modules/tracker/tracker.css',
              23 => 'modules/update/update.css',
              24 => 'modules/user/user.css',
            ),
          ),
          'project' => 'bootstrap',
          'datestamp' => '1355215564',
        ),
        'project' => 'bootstrap',
        'version' => '7.x-2.0-beta2',
      ),
      'hfh_bootstrap' => 
      array (
        'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/sites/all/themes/hfh_bootstrap/hfh_bootstrap.info',
        'basename' => 'hfh_bootstrap.info',
        'name' => 'HfH Bootstrap',
        'info' => 
        array (
          'screenshot' => 'screenshot.png',
          'name' => 'HfH Bootstrap',
          'description' => 'Bootstrap subtheme',
          'core' => '7.x',
          'base theme' => 'bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'headerMiddle' => 'Top Bar Middle',
            'headerRight' => 'Top Bar Right',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'sponsors' => 'Sponsors',
            'footer' => 'Footer',
            'footerMiddle' => 'Footer Middle',
            'footerRight' => 'Footer Right',
            'main_slider' => 'Slider',
            'local_news' => 'Local',
            'state_news' => 'State',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'hfh.css',
            ),
          ),
          'settings' => 
          array (
            'toggle_name' => '0',
            'toggle_search' => '1',
            'carousel_timing' => '8000',
            'background_color' => '0',
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1384983240',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.24',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/data/disk/o1/static/habitat-for-humanity-v1.9/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.24',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1384983240',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.24',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);