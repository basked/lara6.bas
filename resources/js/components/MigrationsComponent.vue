<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Migrations</div>
                    <div class="card-body">
                        <b>{{title}}</b>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <select class="browser-default custom-select" @change="onChange">
                                        <option v-for="(migration,index) in migrations" :value="migration">
                                            {{migration}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="/artisan_create_migrate"> Create migration</a>
                        <a class="btn btn-primary" href="/artisan_migrate"> Migrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MigrationsComponent",
        props: [
            'title',
            'migrations'
        ],
        mounted() {
            console.log('Mouted')
        },
        data() {
            return {
                items: [
                    {message: 'Foo'},
                    {message: 'Bar'}
                ]
            }
        },
        methods: {
            onChange(event) {
                console.log(event.target.value)
            },
        }
    }
</script>
