<template>
  <v-container grid-list-xs>
    <v-layout align-center row wrap v-if="authUserfailded">
      <v-flex xs12 sm6 offset-sm3 md4 offset-md4>
        <v-alert :value="true" color="error" icon="mdi-close" outline>{{ authUserfailded }}</v-alert>
      </v-flex>
    </v-layout>

    <v-layout align-center row wrap>
      <v-flex xs12 sm6 offset-sm3 md4 offset-md4>
        <v-form ref="form" v-model="valid" @submit="tryLogin" lazy-validation>
          <v-text-field v-model="email" :rules="emailRules" label="E-mail" required></v-text-field>
          <v-text-field
            v-model="password"
            :append-icon="show2 ? 'mdi-eye-outline' : 'mdi-eye-off-outline'"
            :rules="[rules.required]"
            :type="show2 ? 'text' : 'password'"
            name="input-10-2"
            label="Password"
            hint="Pelo menos 4 caracteres"
            class="input-group--focused"
            @click:append="show2 = !show2"
          ></v-text-field>

          <v-checkbox v-model="remember" label="Lembar dados?"></v-checkbox>

          <v-btn
            :disabled="!valid||getLoading"
            type="submit"
            :loading="getLoading"
            color="success"
            @click="validate"
          >Entrar</v-btn>
        </v-form>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
import { mapMutations, mapState, mapActions, mapGetters } from "vuex";

export default {
  data: () => ({
    password: null,
    email: null,
    remember: false,

    show2: false,
    valid: true,
    rules: {
      required: value => !!value || "Obrigatório."
    },
    emailRules: [
      v => !!v || "Email obrigatório",
      v => /.+@.+/.test(v) || "Insira um email válido"
    ]
  }),
  computed: {
    ...mapGetters([
      "authUser",
      "getLoading",
      "authUserfailded",
      "authUserSuccess"
    ])
  },
  methods: {
    validate() {
      if (this.$refs.form.validate()) {
        this.snackbar = true;
      }
    },
    tryLogin(e) {
      e.preventDefault();
      if (this.valid) {
        const credencials = {
          email: this.email,
          password: this.password,
          remember: this.remember
        };
        this.$store.dispatch("login", credencials);
      } else {
        return;
      }
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    }
  },
  watch: {
    authUser(value) {
      if (value !== null && value !== undefined) {
        this.$router.push("dashboard");
      }
    }
  }
};
</script>