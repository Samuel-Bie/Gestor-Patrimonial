// https://vuex.vuejs.org/en/state.html

export default {
  loading:false,
  error: null,

  /* autenicate users */
    authUser:null,
    authToken:null,
    authRefreshToken:null,
    loadingUser:false,
    authUserfailded:false,
    authUserSuccess:false,
  /* autenicate users */

  APP_PASSPORT_CLIENT_SECRET:'IUmdAORWZdCwYFWPsQmQZ0zBXXYpAzRMOtlA6ebx',
  APP_PASSPORT_CLIENT_ID: 2
}