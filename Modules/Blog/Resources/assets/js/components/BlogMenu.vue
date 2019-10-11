<template>
    <div class="demo-container">
        <div class="form">
            <DxMenu :data-source="menus"
                    :orientation="orientation"
                    display-expr="name"
                    @item-click="clickMenu"
            />
        </div>
    </div>
</template>

    <script>
        import {DxMenu} from 'devextreme-vue/menu';

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
                    }],
                    orientation: 'horizontal'
                }
            },
            methods: {
                clickMenu(e) {
                    this.itemMenu = e.itemData.name
                }
            }
        }
    </script>

    <style scoped>
    </style>
