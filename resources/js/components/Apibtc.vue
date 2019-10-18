<template>
  <div>
    <div class="card border-warning">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <h4>
              <strong>Última Actualización</strong>
            </h4>
            <h5 v-text="dataBtc.time"></h5>
          </div>
          <div class="col-md-4">
            <h4>
              <strong>Tipo Moneda</strong>
            </h4>
            <h5 v-text="dataBtc.asset_id_base"></h5>
          </div>
          <div class="col-md-4">
            <h4>
              <strong>Valor USD</strong>
            </h4>
            <h5 v-text="dataBtc.rate"></h5>
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
      dataBtc: []
    };
  },
  created() {
    //creamos la variable con la url de la API Laravel
    let url = "/api/getbtc";
    axios
      .get(url)
      .then(res => {
        this.dataBtc = res.data;
        //console.log(res);
      })
      .catch(err => {
        console.error(err);
      });
  }
};
</script>
