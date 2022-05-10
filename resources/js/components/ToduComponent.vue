<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todu Component</div>

                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Title" aria-label="Title"
                                aria-describedby="button" v-model="todu_input">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-outline-secondary" id="button" @click="saveTodu()">Add</button>
                            </div>
                        </div>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>                                    
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(todu,index)  in todus" :key="index">                                    
                                    <td scope="row">{{++index}}</td>
                                    <td >{{todu.id}}</td>
                                    <td>{{todu.name}}</td>
                                    <td><button class="btn btn-sm btn-outline-danger" @click="deleteTodu(todu.id)">Delete</button></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { thisExpression } from "@babel/types";

export default {
    data(){
        return{
            todus:[],
            api:'http://127.0.0.1:8000/api/todus',
            todu_input:'',
        }
    },
    mounted(){
        this.axios.get(this.api).then(
            res =>{
                 this.todus = res.data
            });
    },
    methods:{
        saveTodu(){
            if(this.todu_input.length > 0){                
                this.axios.post(this.api,{'name': this.todu_input}).then(res =>{                    
                    this.todus.push(res.data);
                    this.todu_input ='';
                });
            }            
        },
        deleteTodu(id){            
            this.axios.delete(this.api+'/'+id).then(res =>{
                this.axios.get(this.api).then(
                res =>{
                    this.todus = res.data
                });               
            });            
        }
    }
}
</script>
