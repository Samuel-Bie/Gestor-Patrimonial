(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(source, true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(source).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['id'],
  data: function data() {
    return {
      timeline: false,
      direction: 'left',
      fab: false,
      fling: false,
      hover: true,
      tabs: null,
      top: false,
      right: true,
      bottom: true,
      left: false,
      transition: 'scale-transition'
    };
  },
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_0__["mapGetters"])({
    getPatrimonio: 'patrimonio/getPatrimonio',
    getSelectedPatrimonio: 'patrimonio/getSelectedPatrimonio',
    getFormaAquisicao: 'patrimonio/getFormaAquisicao',
    getClasse: 'patrimonio/getClasse',
    loading: 'getLoading',
    getImovel: 'patrimonio/getImovel',
    getLivro: 'patrimonio/getLivro',
    getMovel: 'patrimonio/getMovel',
    getVeiculo: 'patrimonio/getVeiculo'
  }), {
    activeFab: function activeFab() {
      switch (this.tabs) {
        case 'one':
          return {
            'class': 'purple',
            icon: 'account_circle'
          };

        case 'two':
          return {
            'class': 'red',
            icon: 'edit'
          };

        case 'three':
          return {
            'class': 'green',
            icon: 'keyboard_arrow_up'
          };

        default:
          return {};
      }
    },
    details: function details() {
      return this.getSelectedPatrimonio;
    },
    imovel: function imovel() {
      return this.getImovel;
    },
    movel: function movel() {
      return this.getLivro;
    },
    livro: function livro() {
      return this.getMovel;
    },
    veiculo: function veiculo() {
      return this.getVeiculo;
    },
    classe: function classe() {
      return this.getClasse;
    }
  }),
  methods: {},
  mounted: function mounted() {},
  watch: {
    top: function top(val) {
      this.bottom = !val;
    },
    right: function right(val) {
      this.left = !val;
    },
    bottom: function bottom(val) {
      this.top = !val;
    },
    left: function left(val) {
      this.right = !val;
    }
  },
  beforeCreate: function beforeCreate() {}
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* This is for documentation purposes and will not be needed in your application */\n#create .v-speed-dial[data-v-4c84583c] {\n  position: fixed;\n  z-index:100;\n}\n#create .v-btn--floating[data-v-4c84583c] {\n  position: relative;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&":
/*!*******************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--6-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--6-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& ***!
  \*******************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true& ***!
  \************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-container",
        [
          _c(
            "v-layout",
            { attrs: { "justify-center": "", "align-center": "" } },
            [
              _c("v-flex", { attrs: { xs12: "" } }, [
                !_vm.loading
                  ? _c(
                      "div",
                      [
                        _c(
                          "material-card",
                          {
                            attrs: {
                              color: "info",
                              title: _vm.classe.designacao,
                              text: _vm.details.nip + " "
                            }
                          },
                          [
                            _c("v-card-text", [
                              _c(
                                "div",
                                [
                                  _c(
                                    "v-container",
                                    {
                                      staticClass: "pa-0",
                                      attrs: { "grid-list-xl": "", fluid: "" }
                                    },
                                    [
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { row: "", wrap: "", m0: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs12: "", m0: "" } },
                                            [
                                              _c(
                                                "span",
                                                {
                                                  staticClass:
                                                    "heading-4 text-info"
                                                },
                                                [_vm._v("Entidade utilizadora")]
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-container",
                                    {
                                      staticClass: "pa-0",
                                      attrs: { "grid-list-xl": "", fluid: "" }
                                    },
                                    [
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { "align-end": "", wrap: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("UGB")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.codigo
                                                    )
                                                  ),
                                                  _c("br"),
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.designacao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("UGE")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .uge.codigo
                                                    )
                                                  ),
                                                  _c("br"),
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .uge.designacao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _vm.details.localizacao.setor !== null
                                            ? _c(
                                                "v-flex",
                                                { attrs: { xs6: "", md3: "" } },
                                                [
                                                  _c(
                                                    "h6",
                                                    {
                                                      staticClass:
                                                        "heading-6 text-uppercase"
                                                    },
                                                    [_vm._v("Setor")]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "small",
                                                    { staticClass: "small" },
                                                    [
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.details
                                                            .localizacao.setor
                                                            .codigo
                                                        )
                                                      ),
                                                      _c("br"),
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.details
                                                            .localizacao.setor
                                                            .designacao
                                                        )
                                                      )
                                                    ]
                                                  )
                                                ]
                                              )
                                            : _vm._e()
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { "align-end": "", wrap: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Provincia")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.provincia
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Distrito")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.destrito
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Posto Administrativo")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb
                                                        .posto_administrativo
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Localidade")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.localidade
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Bairro")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.localidade
                                                    )
                                                  ),
                                                  _c("br"),
                                                  _vm._v(
                                                    "Classe:\n                                                " +
                                                      _vm._s(
                                                        _vm.details.localizacao
                                                          .ugb
                                                          .classificador_territorial
                                                      )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md6: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Endereco")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details.localizacao
                                                        .ugb.endereco
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  )
                                ],
                                1
                              )
                            ])
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "material-card",
                          { attrs: { color: "info" } },
                          [
                            _c("v-card-text", [
                              _c(
                                "div",
                                [
                                  _c(
                                    "v-container",
                                    {
                                      staticClass: "pa-0",
                                      attrs: { "grid-list-xl": "", fluid: "" }
                                    },
                                    [
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { row: "", wrap: "", m0: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs12: "", m0: "" } },
                                            [
                                              _c(
                                                "span",
                                                {
                                                  staticClass:
                                                    "heading-4 text-info"
                                                },
                                                [_vm._v("Identificação")]
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "v-container",
                                    {
                                      staticClass: "pa-0",
                                      attrs: { "grid-list-xl": "", fluid: "" }
                                    },
                                    [
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { "align-end": "", wrap: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Classificador")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(_vm.classe.codigo)
                                                  ),
                                                  _c("br"),
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.classe.designacao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Forma de aquisição")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.getFormaAquisicao
                                                        .codigo
                                                    )
                                                  ),
                                                  _c("br"),
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.getFormaAquisicao
                                                        .designacao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [_vm._v("Estado de aquisição")]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details
                                                        .estado_aquisicao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          ),
                                          _vm._v(" "),
                                          _c(
                                            "v-flex",
                                            { attrs: { xs6: "", md3: "" } },
                                            [
                                              _c(
                                                "h6",
                                                {
                                                  staticClass:
                                                    "heading-6 text-uppercase"
                                                },
                                                [
                                                  _vm._v(
                                                    "Estado de conservação"
                                                  )
                                                ]
                                              ),
                                              _vm._v(" "),
                                              _c(
                                                "small",
                                                { staticClass: "small" },
                                                [
                                                  _vm._v(
                                                    _vm._s(
                                                      _vm.details
                                                        .estado_conservacao
                                                    )
                                                  )
                                                ]
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _vm.imovel !== null
                                    ? _c(
                                        "patrimonio-identificacao-parts-imovel",
                                        {
                                          attrs: {
                                            details: _vm.details,
                                            imovel: _vm.imovel
                                          }
                                        }
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.movel !== null
                                    ? _c(
                                        "patrimonio-identificacao-parts-movel",
                                        {
                                          attrs: {
                                            details: _vm.details,
                                            movel: _vm.movel
                                          }
                                        }
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.veiculo !== null
                                    ? _c(
                                        "patrimonio-identificacao-parts-veiculo",
                                        {
                                          attrs: {
                                            details: _vm.details,
                                            veiculo: _vm.veiculo
                                          }
                                        }
                                      )
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.livro !== null
                                    ? _c(
                                        "patrimonio-identificacao-parts-livro",
                                        {
                                          attrs: {
                                            details: _vm.details,
                                            livro: _vm.livro
                                          }
                                        }
                                      )
                                    : _vm._e()
                                ],
                                1
                              )
                            ])
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "material-card",
                          { staticClass: "mt-4", attrs: { color: "info" } },
                          [
                            _c("v-card-text", [
                              _c(
                                "div",
                                [
                                  _c(
                                    "v-container",
                                    {
                                      staticClass: "pa-0",
                                      attrs: { "grid-list-xl": "", fluid: "" }
                                    },
                                    [
                                      _c(
                                        "v-layout",
                                        {
                                          attrs: { row: "", wrap: "", m0: "" }
                                        },
                                        [
                                          _c(
                                            "v-flex",
                                            { attrs: { xs12: "", m0: "" } },
                                            [
                                              _c(
                                                "span",
                                                {
                                                  staticClass:
                                                    "heading-4 text-info"
                                                },
                                                [
                                                  _vm._v(
                                                    "Informações adicionais"
                                                  )
                                                ]
                                              )
                                            ]
                                          )
                                        ],
                                        1
                                      )
                                    ],
                                    1
                                  ),
                                  _vm._v(" "),
                                  _c("patrimonio-details-parts-details", {
                                    attrs: {
                                      details: _vm.details,
                                      imovel: _vm.imovel,
                                      movel: _vm.movel,
                                      veiculo: _vm.veiculo,
                                      livro: _vm.livro
                                    }
                                  })
                                ],
                                1
                              )
                            ])
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _vm.details.ficheiros.length > 0
                          ? _c(
                              "material-card",
                              { staticClass: "mt-4", attrs: { color: "info" } },
                              [
                                _c("v-card-text", [
                                  _c(
                                    "div",
                                    [
                                      _c(
                                        "v-container",
                                        {
                                          staticClass: "pa-0",
                                          attrs: {
                                            "grid-list-xl": "",
                                            fluid: ""
                                          }
                                        },
                                        [
                                          _c(
                                            "v-layout",
                                            {
                                              attrs: {
                                                row: "",
                                                wrap: "",
                                                m0: ""
                                              }
                                            },
                                            [
                                              _c(
                                                "v-flex",
                                                { attrs: { xs12: "", m0: "" } },
                                                [
                                                  _c(
                                                    "span",
                                                    {
                                                      staticClass:
                                                        "heading-4 text-info"
                                                    },
                                                    [_vm._v("Ficheiros")]
                                                  )
                                                ]
                                              )
                                            ],
                                            1
                                          )
                                        ],
                                        1
                                      ),
                                      _vm._v(" "),
                                      _c("patrimonio-files", {
                                        attrs: { files: _vm.details.ficheiros }
                                      })
                                    ],
                                    1
                                  )
                                ])
                              ],
                              1
                            )
                          : _vm._e()
                      ],
                      1
                    )
                  : _c(
                      "div",
                      [
                        _c(
                          "material-card",
                          { attrs: { color: "info", title: "Carregando" } },
                          [
                            _c(
                              "v-card-text",
                              [
                                _c(
                                  "v-container",
                                  {
                                    staticClass: "pa-0",
                                    attrs: { "grid-list-xl": "", fluid: "" }
                                  },
                                  [
                                    [
                                      _c("v-progress-linear", {
                                        attrs: { indeterminate: true }
                                      })
                                    ]
                                  ],
                                  2
                                )
                              ],
                              1
                            )
                          ],
                          1
                        )
                      ],
                      1
                    )
              ])
            ],
            1
          ),
          _vm._v(" "),
          [
            _c(
              "v-card",
              { attrs: { id: "create" } },
              [
                _c(
                  "v-speed-dial",
                  {
                    attrs: {
                      top: _vm.top,
                      bottom: _vm.bottom,
                      right: _vm.right,
                      left: _vm.left,
                      direction: _vm.direction,
                      "open-on-hover": _vm.hover,
                      transition: _vm.transition
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "activator",
                        fn: function() {
                          return [
                            _c(
                              "v-btn",
                              {
                                attrs: {
                                  color: "primary darken-2",
                                  dark: "",
                                  fab: ""
                                },
                                model: {
                                  value: _vm.fab,
                                  callback: function($$v) {
                                    _vm.fab = $$v
                                  },
                                  expression: "fab"
                                }
                              },
                              [
                                _c("v-icon", [_vm._v("mdi-cogs")]),
                                _vm._v(" "),
                                _c("v-icon", [_vm._v("mdi-close")])
                              ],
                              1
                            )
                          ]
                        },
                        proxy: true
                      }
                    ]),
                    model: {
                      value: _vm.fab,
                      callback: function($$v) {
                        _vm.fab = $$v
                      },
                      expression: "fab"
                    }
                  },
                  [
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: { fab: "", dark: "", small: "", color: "green" }
                      },
                      [_c("v-icon", [_vm._v("mdi-pencil")])],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: { fab: "", dark: "", small: "", color: "indigo" }
                      },
                      [_c("v-icon", [_vm._v("mdi-plus")])],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      { attrs: { fab: "", dark: "", small: "", color: "red" } },
                      [_c("v-icon", [_vm._v("mdi-delete-outline")])],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: { fab: "", dark: "", small: "", color: "blue" },
                        on: {
                          click: function($event) {
                            _vm.timeline = true
                          }
                        }
                      },
                      [_c("v-icon", [_vm._v("mdi-timeline-outline")])],
                      1
                    )
                  ],
                  1
                )
              ],
              1
            )
          ],
          _vm._v(" "),
          _c("patrimonio-timeline", {
            attrs: { dialog: _vm.timeline },
            on: {
              close: function($event) {
                _vm.timeline = false
              }
            }
          })
        ],
        2
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/ViewPatrimonio.vue":
/*!***********************************************!*\
  !*** ./resources/js/views/ViewPatrimonio.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true& */ "./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true&");
/* harmony import */ var _ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ViewPatrimonio.vue?vue&type=script&lang=js& */ "./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& */ "./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "4c84583c",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/ViewPatrimonio.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./ViewPatrimonio.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--6-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--6-2!../../../node_modules/vue-loader/lib??vue-loader-options!./ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=style&index=0&id=4c84583c&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(__WEBPACK_IMPORT_KEY__ !== 'default') (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_6_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_6_2_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_style_index_0_id_4c84583c_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true&":
/*!******************************************************************************************!*\
  !*** ./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);