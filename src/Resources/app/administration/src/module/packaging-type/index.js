import './page/packaging-type-list';

import deDE from './snippet/de-DE';
import enGB from './snippet/en-GB';

Shopware.Module.register('packaging-type', {
    type: 'plugin',
    name: 'packaging-type.title',
    description: 'packaging-type.title',
    color: '#9AA8B5',
    icon: 'regular-bars',
    entity: 'ntfx_packaging_type',
    entityDisplayProperty: 'name',

    snippets: {
        'de-DE': deDE,
        'en-GB': enGB
    },
    routes: {
        index: {
            component: 'packaging-type-list',
            path: 'index',
            meta: {
                parentPath: 'sw.settings.index'
            }
        },
        create: {
            component: 'packaging-type-create',
            path: 'create',
            meta:   {
                parentPath: 'packaging.type.index',
            }
        }
    },

    settingsItem: [
        {
            name: 'packaging-type',
            to: 'packaging.type.index',
            icon: 'regular-bars',
            label: 'packaging-type.title',
            group: 'plugins'
        }
    ],
});