const {Component} = Shopware;
import template from './packaging-type-list.html.twig';

const {Mixin} = Shopware;
const {Criteria} = Shopware.Data;

Component.register('packaging-type-list', {

    template,
    inject: ['repositoryFactory'],
    mixins: [
        Mixin.getByName('notification'),
    ],
    created() {
        this.createdComponent();
    },
    computed: {

        packagingTypeRepository() {
            return this.repositoryFactory.create('ntfx_packaging_type');
        },

        packagingTypeCriteria() {

            return new Criteria();
        },

//        columns() {
//            return [
//                {
//                    property: 'name',
//                    dataIndex: 'name',
//                }
//            ];
//        }
    },
    methods: {
        createdComponent() {
            console.log('here we go');
            return false;
        },
    }
});