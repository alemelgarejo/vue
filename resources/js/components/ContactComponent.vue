<template>
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                <img src="images/csgo.png" alt="csgo" width="100%" style="width:200px !important;" class="mx-auto d-block">
            </div>
            <div class="card_body mx-3 my-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Nombre
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombre" v-model="name">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Apellido
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Apellido" v-model="surname">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            Email
                        </span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" v-model="email">
                </div>

                <div class="input-group mt-3">
                    <textarea class="form-control" placeholder="Comentarios" v-model="content"></textarea>
                </div>

                <button @click="saveContact" class="btn btn-primary float-right mt-3 btn-sm">Enviar</button>
            </div>
        </div>
        {{name}}
        {{surname}}
        {{email}}
        {{content}}
    </div>

</template>
<script>
    export default {
        created(){
            //this.saveContact();
        },
        methods: {
            saveContact: function() {
                console.log("Nombre: "+this.name+", Apellidos: "+this.surname+", Email: "+this.email+",  Contenido: "+this.content);
                /* fetch('http://localhost/php/udemy1/public/api/post?page='+this.currentPage)
                .then( response => response.json() )
                .then( json =>{
                    this.posts = json.data.data;
                    this.total = json.data.last_page;
                    console.log('created '+this.total);
                }); */
            },
        },
        data: function () {
            return {
                name: '',
                surname: '',
                email: '',
                content: '',
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
