<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <br/>
                        <b>{{title}}</b>

                        <ul id="example-1">
                            <li v-for="item in  items">
                                {{ item.message }}
                            </li>

                            <li v-for="ar in   JSON.stringify(arss)">
                                {{ ar }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            title:String,
            arss:String
        },
        data(){
            return {
                arrr: arss,
                items: [
                    {message: 'Foo'},
                    {message: 'Bar'}
                ]
            }
        },
        mounted() {
            console.log(arrr)
        }
    }
</script>
