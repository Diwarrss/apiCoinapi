<template>
  <div class="mx-auto">
    <div class="col-md-12 mt-3">
      <div class="card border-success">
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
                <tr>
                  <td v-text="dataEtc.time"></td>
                  <td v-text="dataEtc.asset_id_base"></td>
                  <td v-text="dataEtc.rate"></td>
                </tr>
                <tr v-if="!dataEtc">
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
      dataEtc: []
    };
  },
  created() {
    //creamos la variable con la url de la API Laravel
    let url = "http://apicoinapi.local/api/getetc";
    axios
      .get(url)
      .then(res => {
        this.dataEtc = res.data;
        //console.log(res);
      })
      .catch(err => {
        console.error(err);
      });
  }
};
</script>
