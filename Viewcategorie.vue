<template>
  <div> 
    <router-link :to="{name: 'Addcategorie'}" class="btn btn-primary">New
Category</router-link>
     <table class="table table-striped">
      <thead>
        <tr>
          <td>Image</td>
          <td>Nom categorie</td>
          <td>Modifier</td>
          <td>Supprimer</td> 
        </tr>
      </thead>
      <tbody>
        <tr v-for="cat in categorie" :key="cat.id">
          <td><img:src="cat.imagecategorie" width="70" height="80"/> </td>
          <td>{{cat.nomcategorie}}</td> 
          <td><button class="btn btn-warning">Modifier</button></td>
          <td><button class="btn btn-danger" @click="deletecategorie(cat.id)">Supprimer</button></td>  
        </tr>
      </tbody>
     </table>
  </div>
</template>

<script setup>
import {ref,onMounted} from 'vue';
import axios from 'axios';
const categories=ref([]) 
const getcategories=async()=>{
  await axios.get("http://localhost:8000/api/categories")
  .then(res=>categories.value=res.data).catch(error=>{console.log(error)}) 
}

onMounted(() => { 
getCategories();
});

const deletecategorie=async(id)=>{
  await axios.delete(`http://localhost:8000/api/categories/$(id)`)
  .then(res=>console.log("categorie supprimée")).catch(error=>{
    console.log(error) 
  })
}

</script>

<style lang="scss" scoped>

</style>