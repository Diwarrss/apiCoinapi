<template>
  <div class="mx-auto">
    <div class="col-md-12 mt-3">
      <div class="card border-warning">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Última Actualización</th>
                  <th scope="col">Tipo Moneda</th>
                  <th scope="col">Valor USD</th>
                </tr>
              </thead>
              <tbody>
                <!-- mostramos la respectiva informacion obtenida -->
                <tr>
                  <td v-text="dataBtc.time"></td>
                  <td v-text="dataBtc.asset_id_base"></td>
                  <td v-text="dataBtc.rate"></td>
                </tr>
                <tr v-if="!dataBtc">
                  <th colspan="3">
                    <div class="alert alert-warning" role="alert">Sin Información</div>
                  </th>
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
