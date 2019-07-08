(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue2_scrollspy__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue2-scrollspy */ "./node_modules/vue2-scrollspy/src/index.js");
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; var ownKeys = Object.keys(source); if (typeof Object.getOwnPropertySymbols === 'function') { ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) { return Object.getOwnPropertyDescriptor(source, sym).enumerable; })); } ownKeys.forEach(function (key) { _defineProperty(target, key, source[key]); }); } return target; }

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
 // use default options

Vue.use(vue2_scrollspy__WEBPACK_IMPORTED_MODULE_0__["default"]); // or custom options

Vue.use(vue2_scrollspy__WEBPACK_IMPORTED_MODULE_0__["default"], options);

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['id'],
  computed: _objectSpread({}, Object(vuex__WEBPACK_IMPORTED_MODULE_1__["mapGetters"])({
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
    bem: function bem() {
      return this.getPatrimonio(this.id);
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
  mounted: function mounted() {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c& ***!
  \************************************************************************************************************************************************************************************************************/
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
              _c("v-flex", { attrs: { xs12: "", md9: "" } }, [
                !_vm.loading
                  ? _c(
                      "div",
                      [
                        _c(
                          "material-card",
                          {
                            attrs: {
                              color: "info",
                              title: _vm.bem.classe,
                              text: _vm.bem.nip + " "
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
                                                  _vm._v(_vm._s(_vm.bem.ugb))
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
                                                  _vm._v(_vm._s(_vm.bem.ugb))
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
                                            : _vm._e(),
                                          _vm._v(" "),
                                          _vm.details.localizacao
                                            .departamento !== null
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
                                                    [_vm._v("Departamento")]
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "small",
                                                    { staticClass: "small" },
                                                    [
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.details
                                                            .localizacao
                                                            .departamento.codigo
                                                        )
                                                      ),
                                                      _c("br"),
                                                      _vm._v(
                                                        _vm._s(
                                                          _vm.details
                                                            .localizacao
                                                            .departamento
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
                                                    "Classe: " +
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
                                                      _vm.bem.estado_aquisicao
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
                                                      _vm.bem.estado_conservacao
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
                                    ? _c("patrimonio-imovel", {
                                        attrs: {
                                          details: _vm.details,
                                          imovel: _vm.imovel
                                        }
                                      })
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.movel !== null
                                    ? _c("patrimonio-movel", {
                                        attrs: {
                                          details: _vm.details,
                                          movel: _vm.movel
                                        }
                                      })
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.veiculo !== null
                                    ? _c("patrimonio-veiculo", {
                                        attrs: {
                                          details: _vm.details,
                                          veiculo: _vm.veiculo
                                        }
                                      })
                                    : _vm._e(),
                                  _vm._v(" "),
                                  _vm.livro !== null
                                    ? _c("patrimonio-livro", {
                                        attrs: {
                                          details: _vm.details,
                                          livro: _vm.livro
                                        }
                                      })
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
                                  _c("patrimonio-details", {
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
                          { attrs: { color: "info", title: _vm.Carregando } },
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
              ]),
              _vm._v(" "),
              _c("v-flex", { attrs: { xs12: "", md3: "" } }, [
                _vm._v("\n                Olas\n            ")
              ])
            ],
            1
          )
        ],
        1
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
/* harmony import */ var _ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ViewPatrimonio.vue?vue&type=template&id=4c84583c& */ "./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&");
/* harmony import */ var _ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ViewPatrimonio.vue?vue&type=script&lang=js& */ "./resources/js/views/ViewPatrimonio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ViewPatrimonio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
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

/***/ "./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&":
/*!******************************************************************************!*\
  !*** ./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./ViewPatrimonio.vue?vue&type=template&id=4c84583c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/ViewPatrimonio.vue?vue&type=template&id=4c84583c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewPatrimonio_vue_vue_type_template_id_4c84583c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);