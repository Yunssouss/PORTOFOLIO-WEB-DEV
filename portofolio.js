<template>
  <div class="container">
    <h2>Portfolio</h2>
    <div class="row">
      <div class="col-md-4" v-for="project in projects" :key="project.id">
        <div class="card">
          <img :src="project.image" class="card-img-top" alt="project image">
          <div class="card-body">
            <h5 class="card-title">{{ project.title }}</h5>
            <p class="card-text">{{ project.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projects: [
        { id: 1, title: "Project 1", description: "Description of project 1", image: "project1.jpg" },
        { id: 2, title: "Project 2", description: "Description of project 2", image: "project2.jpg" },
        // More projects...
      ]
    };
  }
};
</script>

<style>
.card {
  margin-bottom: 20px;
}
</style>
