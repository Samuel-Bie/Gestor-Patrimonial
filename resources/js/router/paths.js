/**
 * Define all of your application routes here
 * for more information on routes, see the
 * official documentation https://router.vuejs.org/en/
 */
export default [
    {
      path: '/dashboard',
      // Relative to /src/views
      view: 'Dashboard'
    },
    {
      path: '/user-profile',
      name: 'User Profile',
      view: 'UserProfile'
    },
    {
      path: '/patrimonio',
      view: 'Patrimonio'
    },
    {
      props: true,
      path: '/patrimonio/:id',
      view: 'ViewPatrimonio',
      name: 'Ver patrimonio',
    },

  ]
