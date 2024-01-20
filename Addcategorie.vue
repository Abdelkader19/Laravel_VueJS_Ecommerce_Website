<template>
  <div> 
   <form @submit="Addcategorie"> 
  <div class="mb-3">
    <label for="nomcateg" class="form-label">Nom categorie</label>
    <input type="text" class="form-control" id="nomcategorie" v-model="categorie.nomcategorie" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3"> 
    <label for="Imagecateg" class="form-label">Image</label>
    <input type="text" class="form-control" id="imagecategorie" v-model="categorie.imagecategorie">
  
  <button type="submit" class="btn btn-primary">Enregistrer</button> </div> 
  </form> 
  </div> 
   </template> 

<script setup>
 const categorie=ref({
  nomcategorie:"",
  imagecategorie:""  
  })
 const Addcategorie=async()=>{
  await axios.post("http://localhost:8000/api/categories/",categorie.value)}
</script>

<style lang="scss" scoped>

</style> 