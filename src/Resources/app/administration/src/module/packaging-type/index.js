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
        list: {
            component: 'packaging-type-list',
            path: 'list',
            meta: {
                parentPath: 'sw.settings.index'
            }
        }
    },

    settingsItem: [
        {
            name: 'packaging-type',
            to: 'packaging-type.list',
            icon: 'regular-bars',
            label: 'packaging-type.title',
            group: 'plugins'
        }
    ],
});