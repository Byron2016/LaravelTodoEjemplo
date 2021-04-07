  <template>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Shop1 Catalog</h1>
        <div class="list-group">
          <a class="list-group-item" v-for="category in categories">
            {{ category.name }}
          </a>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row mt-4">

        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function() {
      return {
        categories: [],
        products: []
      }
    },

    mounted() {
      this.loadCategories();
      this.loadProducts();
    },

    methods: {
      loadCategories: function() {
        // load API
        // assign this.categories
        // catch errors
        axios.get('/api/categories')
        .then((response) =>{
          this.categories = response.data.data;
        })
        .catch(function(error){
          console.log(error);
        });
      }
    }
  }

</script>