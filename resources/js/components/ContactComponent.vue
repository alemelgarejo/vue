<template>
    <div class="col-8 offset-2">
        <form @submit.prevent="onSubmit">
            <div class="card-header">
                <img src="images/csgo.png" alt="csgo" width="100%" style="width:200px !important;" class="mx-auto d-block">
            </div>
            <BaseInput label="Nombre" v-model="form.name"></BaseInput>
            <BaseInput label="Apellido" v-model="form.surname"></BaseInput>
            <BaseInput label="Email" type="email" v-model="form.email"></BaseInput>
            <BaseInput label="Teléfono"  v-model="form.phone"></BaseInput>

            <div class="form-group">
                <label>Contenido</label>
                <textarea type="text" class="form-control" rows="3" v-model="form.content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
        </form>
    </div>
</template>
<script>
import  BaseInput  from '../components/BaseInput.vue';
    export default {
        components:{BaseInput},
        data() {
            return {
                form: {
                    name: '',
                    surname: '',
                    email: '',
                    phone: '',
                    content: ''
                }
            }
        },
        methods: {
            onSubmit() {
                if(this.formValid) {
                    console.log('Form sent - ' +this.formValid);
                } else {
                    console.log('Form not sent - ' +this.formValid);
                }

            }
        },
        computed: {
            formValid() {
                return this.form.name.length > 0 &&
                    this.form.surname.length > 0 &&
                    this.form.phone.length > 0 &&
                    this.form.email.length > 0 &&
                    this.form.content.length > 0
            },
        }
    }
</script>
