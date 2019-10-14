<template>
        <div >
            <DxMenu :data-source="menus"
                    :orientation="orientation"
                    display-expr="name"
                    @item-click="clickMenu"
                    @item-rendered="itemRendered"
            />
    </div>
</template>

    <script>
        import {DxMenu} from 'devextreme-vue/menu';

        // стили можно задавать в самом компоненте
        // import 'devextreme/dist/css/dx.common.css';
        // import 'devextreme/dist/css/dx.darkmoon.compact.css';
        export default {
            name: "BlogMenu",
            components: {
                DxMenu
            },
            data() {
                return {
                    itemMenu: '',
                    menus: [{
                        id: '1',
                        name: 'Video Players'
                    }, {
                        id: '2',
                        name: 'Televisions'
                    }, {
                        id: '3',
                        name: 'Monitors'
                    }, {
                        id: '4',
                        name: 'Projectors'
                    }, {
                        id: '5',
                        name: 'PC'
                    }],
                    orientation: 'horizontal'
                }
            },
            methods: {
                clickMenu(e) {
                    console.log(e.itemData );
                    this.itemMenu = e.itemData.name
                },
                itemRendered(e){

                    console.log('item'+e.itemData.name+'Rendered');

                }
            }
        }
    </script>
<style scoped>


</style>
