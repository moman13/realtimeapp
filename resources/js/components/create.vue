<template>
    <v-container>
    <v-form @submit.prevent='create'>

        <v-text-field
                v-model="form.title"
                label="Ask Question"
                type='text'
                required
        ></v-text-field>

        <v-autocomplete
                :items="categories"
                item-text="name"
                item-value="id"
                label="Category"
                v-model="form.category_id"
                flat
        ></v-autocomplete>
        <markdown-editor v-model="form.body" ></markdown-editor>
        <v-btn color='green' type='submit'
        >Create</v-btn>
    </v-form>
    </v-container>
</template>
<script>
    export default {
    methods:{
      create(){
            axios.post('/api/question',this.form)
                .then(res=>this.$router.push(res.data.path))
                .catch(error =>this.errors = error.response.data.error);
      }
    },
        data(){
        return{
            form:{
                title:null,
                category_id:null,
                body:null
            },
            categories:[
                'Alabama',
                'Alaska',
                'American Samoa',
                'Arizona',
                'Arkansas',
                'California',
                'Colorado',
                'Connecticut',
                'Delaware',
                'District of Columbia',
                'Federated States of Micronesia',
                'Florida',
                'Georgia',
                'Guam',
                'Hawaii',
                'Idaho',
                'Illinois',
                'Indiana',
                'Iowa',
                'Kansas',
                'Kentucky',
                'Louisiana',
                'Maine',
                'Marshall Islands',
                'Maryland',
                'Massachusetts',
                'Michigan',
                'Minnesota',
                'Mississippi',
                'Missouri',
                'Montana',
                'Nebraska',
                'Nevada',
                'New Hampshire',
                'New Jersey',
                'New Mexico',
                'New York',
                'North Carolina',
                'North Dakota',
                'Northern Mariana Islands',
                'Ohio',
                'Oklahoma',
                'Oregon',
                'Palau',
                'Pennsylvania',
                'Puerto Rico',
                'Rhode Island',
                'South Carolina',
                'South Dakota',
                'Tennessee',
                'Texas',
                'Utah',
                'Vermont',
                'Virgin Island',
                'Virginia',
                'Washington',
                'West Virginia',
                'Wisconsin',
                'Wyoming'
            ],
            errors:null

        }
        },
        created(){
            axios.get('/api/category').then(res=> this.categories = res.data.data)
        }
    }
</script>
