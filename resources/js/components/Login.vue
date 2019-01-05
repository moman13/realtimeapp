<template lang="html">
  <v-container>
  <div class="">


  <h1>Login</h1>

  <v-form @submit.prevent='login'>

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
    <v-btn color='green' type='submit'
    >Login</v-btn>
    <router-link to="/signup">
      <v-btn color='green' type='submit'
      >Sign Up</v-btn>
    </router-link>
  </v-form>
</div>
</v-container>
</template>

<script>
//import User from '../Helper/User'
export default {
  data(){
    return{
      form:{
        email:null,
        password:null
      }
    }

  },
  methods:{
    //User.login()
    login(){
        User.login(this.form);
        //this.$router.push({name:'forum'});
        /*axios.post('/api/auth/login',this.form)
        .then(res=>console.log(res.data))
        .catch(error=>console.log(error.response.data))*/
    }
  },
    created(){
        if(User.loggedIn()){
            this.$router.push({name:'forum'})
        }
    }
}
</script>

<style lang="css">
</style>
