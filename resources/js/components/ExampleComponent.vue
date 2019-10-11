<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Migrations</div>
                    <div class="card-body">
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

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Code migration</label>
                                <textarea  readoly class="col-xs-12 col-sm-12 col-md-12" id="exampleFormControlTextarea1" rows="20" >{{text_migration}}</textarea>
                            </div>


                   <!--<pre data-enlighter-language="php">-->
                             <!--<pre>-->
                                 <!--{{text_migration}}-->
                            <!--</pre>-->
                       <!--<pre  data-enlighter-language="php" data-enlighter-highlight="1,2,5">-->

                       <!--{{text_migration}}-->

                         <!--</pre>-->

                    </div>
                    <div class="card-footer">
                        <!--<a class="btn btn-primary" href="/artisan_create_migrate"> Create migration</a>-->
                        <!--<a class="btn btn-primary" href="/artisan_migrate"> Migrate</a>-->
                        <button class="btn btn-primary" @click="getMigrations">Обновить миграции</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Mouted');
            this.getMigrations();
        },
        data() {
            return {
                text_migration: "",
                migrations: "",
            }
        },
        methods: {
            onChange(event) {
                console.log(event.target.value);
                this.getMigration(event.target.value);
            },
            getMigrations() {
                axios.get(`api/migrations`).then(response => {
                    this.migrations = response.data;
                    console.log(this.migrations);
                });

            },
            getMigration(migration) {
                axios.get(`api/migration/` + migration).then(response => {
                    this.text_migration =response.data;
                    console.log(this.text_migration);
                });

            }
        }
    }
</script>
