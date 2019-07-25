/**
 * Define all of your application routes here
 * for more information on routes, see the
 * official documentation https://router.vuejs.org/en/
 */
export default [
    {
      path: '/login',
      view: 'Login',
      auth: false
    },
    {
      path: '/dashboard',
      // Relative to /src/views
      view: 'Pagina Inicial',
      view: 'Dashboard',
      auth: true

    },
    {
      path: '/user-profile',
      name: 'Perfil do usuario',
      view: 'UserProfile',
      auth: true

    },
    {
      path: '/patrimonio',
      view: 'Patrimonio',
      auth: true

    },
    {
      path: '/patrimonio/novo',
      view: 'NewPatrimonio',
      name: 'Criar patrimonio',
      auth: true

    },
    {
      path: '/patrimonio/:id',
      view: 'ViewPatrimonio',
      name: 'Ver patrimonio',
      auth: true

    },

  ]
