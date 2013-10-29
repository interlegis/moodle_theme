    <div id="barra" class="clearfix">
        <ul id="globalnavbar">
            <li class="globalnav-busca">
                <form action="http://www.interlegis.leg.br/pesquisa">
                    <input type="hidden" name="cx" value="005989114056755709513:jxifhn8vsyw" />
                    <input type="hidden" name="cof" value="FORID:10" />
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input type="text" name="q" size="8" maxlength="255" value="Pesquisar" onBlur="if (this.value == '') { this.value = 'Pesquisar'; }" onFocus="if (this.value == 'Pesquisar') { this.value = ''; }" />
                </form>
            </li>
            <li><a href="http://saberes.interlegis.leg.br/" title="Saberes - Ambiente de Aprendizagem a Distância" class="globalnav-saberes">Saberes</a></li>
            <li><a href="http://colab.interlegis.leg.br/" title="Colab - Comunidades Interlegis" class="globalnav-colab">Colab</a></li>
            <li><a href="https://intranet.interlegis.gov.br/" title="Intranet Interlegis" class="globalnav-intranet">Intranet</a></li>
            <li><a href="http://www.interlegis.leg.br/" title="Portal Interlegis" class="globalnav-portal">Portal</a></li>
        </ul>
    </div>

    <div id="page-header" class="clearfix">
      <?php if ($PAGE->heading) { ?>
        <a id="saberes-logo" href="<?php echo $CFG->wwwroot; ?>"><img src="<?php echo $OUTPUT->pix_url('logo-saberes', 'theme'); ?>"/></a>
        <a id="ilb-logo" href="http://www.senado.gov.br/senado/ilb/"><img src="<?php echo $OUTPUT->pix_url('logo-ILB', 'theme'); ?>"/></a>
        <div class="headermenu">
          <?php echo $OUTPUT->login_info();
          if (!empty($PAGE->layout_options['langmenu'])) {
            echo $OUTPUT->lang_menu();
          }
          echo $PAGE->headingmenu; ?>
        </div>
      <?php } ?>
    </div>
