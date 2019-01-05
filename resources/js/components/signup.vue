
<template lang="html">
    <v-container>
        <div class="">


            <h1>Signup</h1>

            <v-form @submit.prevent='singup'>
                <v-text-field
                        v-model="form.name"
                        label="User Name"
                        type='text'
                        required
                ></v-text-field>

                <v-text-field
                        v-model="form.email"
                        label="E-mail"
                        type='email'

                        required
                ></v-text-field>
                <v-text-field
                        v-model="form.password"

                        :counter="10"
                        label="Password"
                        type ='password'

                        required
                ></v-text-field>
                <v-text-field
                        v-model="form.password_Conform "
                        :counter="10"
                        label="Password Conform"
                        type ='password'

                        required
                ></v-text-field>


                <v-btn color='green' type='submit'
                >Sign Up</v-btn>
               
            </v-form>
        </div>
    </v-container>
</template>

<script>
    import User from '../Helper/User.js'
    export default {
        data(){
            return{
                form:{
                    name:null,
                    email:null,
                    password:null,
                    password_Conform:null

                }
            }
        },
        methods:{
            singup(){
                    axios.post('/api/auth/signup',this.form)
                        .then(res=>{User.responseAfterLogin(res)
                            this.$router.push({name:'forum'})});
            }
        },
        created(){
            if(User.loggedIn()){
                this.$router.push({name:'forum'})
            }
        }
    }
</script>