<template>
    <v-card>
        <v-container fluid>  
            <v-form @submit.prevent="update">
                <v-text-field
                v-model="form.title"
                label="Title"
                type="text"
                required
                ></v-text-field>
                <markdown-editor v-model="form.body"></markdown-editor>
                <v-card-actions>
                    <v-btn icon small type="submit">
                        <v-icon color="teal">save</v-icon>
                    </v-btn>
                    <v-btn icon small @click='cancel'>
                        <v-icon>cancel</v-icon>
                    </v-btn>
                    
                </v-card-actions>
            </v-form>
        </v-container>        
    </v-card>
</template>

<script>
export default {
    data(){
        return {
            form:{
                title:null,
                body:null
            }
        }
    },
    props:['question'],
    mounted(){
        this.form = this.question
    },
    methods:{
        cancel(){
            EventBus.$emit('cancelEditing')
        },

        update(){
            axios.patch(`/api/question/${this.form.slug}`,this.form)
            .then(res => this.cancel())
        }
    }
}
</script>

<style>

</style>
