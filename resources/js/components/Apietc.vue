<template>
  <div>
    <div class="card border-success">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <h4>
              <strong>Última Actualización</strong>
            </h4>
            <h5 v-text="dataEtc.time"></h5>
          </div>
          <div class="col-md-4">
            <h4>
              <strong>Tipo Moneda</strong>
            </h4>
            <h5 v-text="dataEtc.asset_id_base"></h5>
          </div>
          <div class="col-md-4">
            <h4>
              <strong>Valor USD</strong>
            </h4>
            <h5 v-text="dataEtc.rate"></h5>
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
      dataEtc: []
    };
  },
  //creamos funcion async
  created: async function() {
    //creamos la variable con la url de la API Laravel
    let url = "/api/getetc";

    let response = await axios.get(url);
    this.dataEtc = response.data;
  }
};
</script>
