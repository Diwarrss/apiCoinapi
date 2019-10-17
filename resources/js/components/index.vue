<template>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center">
            <h3>CoinAPI</h3>
          </div>

          <div class="container-fluid row py-4">
            <div class="col-md-4 col-sm-4 col-6 mb-3">
              <div class="card">
                <router-link to="/Apietc" class="btn btn-outline">
                  <div class="card-body">
                    <img
                      src="/img/Ethereum.png"
                      class="img-fluid img-responsive"
                      alt="Responsive image"
                    />
                  </div>
                  <span class="mt-3">Ethereum Classic</span>
                </router-link>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-6 mb-3">
              <div class="card">
                <router-link to="/Apibtc" class="btn btn-outline">
                  <div class="card-body">
                    <img
                      src="/img/Bitcoin.png"
                      class="img-fluid img-responsive"
                      alt="Responsive image"
                    />
                  </div>
                  <span class="mt-3">Bitcoin</span>
                </router-link>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-6 mb-3">
              <div class="card">
                <router-link to="/Apixrp" class="btn btn-outline">
                  <div class="card-body">
                    <img src="/img/xrp.png" class="img-fluid img-responsive" alt="Responsive image" />
                  </div>
                  <span class="mt-3">Ripple</span>
                </router-link>
              </div>
            </div>
            <!-- aqui mostramos el contenido de los componentes creados para mostrar con vue-router -->
            <router-view></router-view>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
/* colocar estilo al router-link-active */
.router-link-exact-active {
  background: #a2d0f7;
}
</style>
