@extends('design.mocklayout.app')

@section('styles')
<style>
*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}
img{
    cursor: pointer;
    padding: 5px;
}
h3{
    padding: 10px;
    background: linear-gradient( 90deg, teal,white);
    margin: 20px 0;
    color: white;
    font-weight: 400;
    border-radius: 5px;
}
.alternate-selection-clearfix{
    text-align: center;
    padding: 5px;
    margin: 10px 0;
    font-size: 30px;
    color: #cfcfcf;
}
</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Choose Image for pixel #_{{ $pixel }}</h1>

        <h3>Upload Custom Image</h3>
        <form class="ipx-form" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="_ipx_custom_emoji" required/>
            <input type="hidden" name="_pixel_id" value="{{ $pixel }}">
            <button type="submit">Upload & Continue</button>
        </form>

        <div class="alternate-selection-clearfix">
            -- OR --
            <br>
            Choose From Library Assets Below
        </div>

        <div>
            <h3>Flags</h3>
            <img src="{{ asset('emojis/ad_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ad_20.gif&quot;;">
            <img src="{{ asset('emojis/ae_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ae_20.gif&quot;;">
            <img src="{{ asset('emojis/af_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/af_20.gif&quot;;">
            <img src="{{ asset('emojis/ag_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ag_20.gif&quot;;">
            <img src="{{ asset('emojis/ai_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ai_20.gif&quot;;">
            <img src="{{ asset('emojis/al_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/al_20.gif&quot;;">
            <img src="{{ asset('emojis/am_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/am_20.gif&quot;;">
            <img src="{{ asset('emojis/an_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/an_20.gif&quot;;">
            <img src="{{ asset('emojis/ao_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ao_20.gif&quot;;">
            <img src="{{ asset('emojis/aq_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/aq_20.gif&quot;;">
            <img src="{{ asset('emojis/ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ar_20.gif&quot;;">
            <img src="{{ asset('emojis/as_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/as_20.gif&quot;;">
            <img src="{{ asset('emojis/at_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/at_20.gif&quot;;">
            <img src="{{ asset('emojis/au_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/au_20.gif&quot;;">
            <img src="{{ asset('emojis/aw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/aw_20.gif&quot;;">
            <img src="{{ asset('emojis/az_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/az_20.gif&quot;;">
            <img src="{{ asset('emojis/ba_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ba_20.gif&quot;;">
            <img src="{{ asset('emojis/bb_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bb_20.gif&quot;;">
            <img src="{{ asset('emojis/bd_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bd_20.gif&quot;;">
            <img src="{{ asset('emojis/be_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/be_20.gif&quot;;">
            <img src="{{ asset('emojis/bf_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bf_20.gif&quot;;">
            <img src="{{ asset('emojis/bg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bg_20.gif&quot;;">
            <img src="{{ asset('emojis/bh_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bh_20.gif&quot;;">
            <img src="{{ asset('emojis/bi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bi_20.gif&quot;;">
            <img src="{{ asset('emojis/bj_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bj_20.gif&quot;;">
            <img src="{{ asset('emojis/bm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bm_20.gif&quot;;">
            <img src="{{ asset('emojis/bn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bn_20.gif&quot;;">
            <img src="{{ asset('emojis/bo_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bo_20.gif&quot;;">
            <img src="{{ asset('emojis/br_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/br_20.gif&quot;;">
            <img src="{{ asset('emojis/bs_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bs_20.gif&quot;;">
            <img src="{{ asset('emojis/bt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bt_20.gif&quot;;">
            <img src="{{ asset('emojis/bv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bv_20.gif&quot;;">
            <img src="{{ asset('emojis/bw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bw_20.gif&quot;;">
            <img src="{{ asset('emojis/by_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/by_20.gif&quot;;">
            <img src="{{ asset('emojis/bz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bz_20.gif&quot;;">
            <img src="{{ asset('emojis/ca_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ca_20.gif&quot;;">
            <img src="{{ asset('emojis/cd_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cd_20.gif&quot;;">
            <img src="{{ asset('emojis/cf_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cf_20.gif&quot;;">
            <img src="{{ asset('emojis/cg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cg_20.gif&quot;;">
            <img src="{{ asset('emojis/ch_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ch_20.gif&quot;;">
            <img src="{{ asset('emojis/ci_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ci_20.gif&quot;;">
            <img src="{{ asset('emojis/ck_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ck_20.gif&quot;;">
            <img src="{{ asset('emojis/cl_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cl_20.gif&quot;;">
            <img src="{{ asset('emojis/cm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cm_20.gif&quot;;">
            <img src="{{ asset('emojis/cn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cn_20.gif&quot;;">
            <img src="{{ asset('emojis/co_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/co_20.gif&quot;;">
            <img src="{{ asset('emojis/cr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cr_20.gif&quot;;">
            <img src="{{ asset('emojis/cu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cu_20.gif&quot;;">
            <img src="{{ asset('emojis/cv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cv_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_20.gif&quot;;">
            <img src="{{ asset('emojis/cz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cz_20.gif&quot;;">
            <img src="{{ asset('emojis/de_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/de_20.gif&quot;;">
            <img src="{{ asset('emojis/dj_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/dj_20.gif&quot;;">
            <img src="{{ asset('emojis/dk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/dk_20.gif&quot;;">
            <img src="{{ asset('emojis/dm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/dm_20.gif&quot;;">
            <img src="{{ asset('emojis/do_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/do_20.gif&quot;;">
            <img src="{{ asset('emojis/dz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/dz_20.gif&quot;;">
            <img src="{{ asset('emojis/ec_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ec_20.gif&quot;;">
            <img src="{{ asset('emojis/ee_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ee_20.gif&quot;;">
            <img src="{{ asset('emojis/eg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/eg_20.gif&quot;;">
            <img src="{{ asset('emojis/er_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/er_20.gif&quot;;">
            <img src="{{ asset('emojis/es_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/es_20.gif&quot;;">
            <img src="{{ asset('emojis/et_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/et_20.gif&quot;;">
            <img src="{{ asset('emojis/eu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/eu_20.gif&quot;;">
            <img src="{{ asset('emojis/fi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fi_20.gif&quot;;">
            <img src="{{ asset('emojis/fj_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fj_20.gif&quot;;">
            <img src="{{ asset('emojis/fk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fk_20.gif&quot;;">
            <img src="{{ asset('emojis/fm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fm_20.gif&quot;;">
            <img src="{{ asset('emojis/fo_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fo_20.gif&quot;;">
            <img src="{{ asset('emojis/fr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fr_20.gif&quot;;">
            <img src="{{ asset('emojis/ga_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ga_20.gif&quot;;">
            <img src="{{ asset('emojis/gb_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gb_20.gif&quot;;">
            <img src="{{ asset('emojis/gd_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gd_20.gif&quot;;">
            <img src="{{ asset('emojis/ge_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ge_20.gif&quot;;">
            <img src="{{ asset('emojis/gh_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gh_20.gif&quot;;">
            <img src="{{ asset('emojis/gi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gi_20.gif&quot;;">
            <img src="{{ asset('emojis/gl_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gl_20.gif&quot;;">
            <img src="{{ asset('emojis/gm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gm_20.gif&quot;;">
            <img src="{{ asset('emojis/gn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gn_20.gif&quot;;">
            <img src="{{ asset('emojis/gp_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gp_20.gif&quot;;">
            <img src="{{ asset('emojis/gq_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gq_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_20.gif&quot;;">
            <img src="{{ asset('emojis/gt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gt_20.gif&quot;;">
            <img src="{{ asset('emojis/gu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gu_20.gif&quot;;">
            <img src="{{ asset('emojis/gw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gw_20.gif&quot;;">
            <img src="{{ asset('emojis/gy_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gy_20.gif&quot;;">
            <img src="{{ asset('emojis/hk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/hk_20.gif&quot;;">
            <img src="{{ asset('emojis/hm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/hm_20.gif&quot;;">
            <img src="{{ asset('emojis/hn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/hn_20.gif&quot;;">
            <img src="{{ asset('emojis/hr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/hr_20.gif&quot;;">
            <img src="{{ asset('emojis/ht_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ht_20.gif&quot;;">
            <img src="{{ asset('emojis/hu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/hu_20.gif&quot;;">
            <img src="{{ asset('emojis/id_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/id_20.gif&quot;;">
            <img src="{{ asset('emojis/ie_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ie_20.gif&quot;;">
            <img src="{{ asset('emojis/il_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/il_20.gif&quot;;">
            <img src="{{ asset('emojis/im_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/im_20.gif&quot;;">
            <img src="{{ asset('emojis/in_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/in_20.gif&quot;;">
            <img src="{{ asset('emojis/io_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/io_20.gif&quot;;">
            <img src="{{ asset('emojis/iq_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/iq_20.gif&quot;;">
            <img src="{{ asset('emojis/ir_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ir_20.gif&quot;;">
            <img src="{{ asset('emojis/is_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/is_20.gif&quot;;">
            <img src="{{ asset('emojis/it_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/it_20.gif&quot;;">
            <img src="{{ asset('emojis/je_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/je_20.gif&quot;;">
            <img src="{{ asset('emojis/jm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/jm_20.gif&quot;;">
            <img src="{{ asset('emojis/jo_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/jo_20.gif&quot;;">
            <img src="{{ asset('emojis/jp_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/jp_20.gif&quot;;">
            <img src="{{ asset('emojis/ke_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ke_20.gif&quot;;">
            <img src="{{ asset('emojis/kg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kg_20.gif&quot;;">
            <img src="{{ asset('emojis/kh_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kh_20.gif&quot;;">
            <img src="{{ asset('emojis/ki_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ki_20.gif&quot;;">
            <img src="{{ asset('emojis/km_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/km_20.gif&quot;;">
            <img src="{{ asset('emojis/kn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kn_20.gif&quot;;">
            <img src="{{ asset('emojis/kp_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kp_20.gif&quot;;">
            <img src="{{ asset('emojis/kr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kr_20.gif&quot;;">
            <img src="{{ asset('emojis/kw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kw_20.gif&quot;;">
            <img src="{{ asset('emojis/ky_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ky_20.gif&quot;;">
            <img src="{{ asset('emojis/kz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/kz_20.gif&quot;;">
            <img src="{{ asset('emojis/la_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/la_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_20.gif&quot;;">
            <img src="{{ asset('emojis/lc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lc_20.gif&quot;;">
            <img src="{{ asset('emojis/li_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/li_20.gif&quot;;">
            <img src="{{ asset('emojis/lk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lk_20.gif&quot;;">
            <img src="{{ asset('emojis/lr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lr_20.gif&quot;;">
            <img src="{{ asset('emojis/ls_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ls_20.gif&quot;;">
            <img src="{{ asset('emojis/lt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lt_20.gif&quot;;">
            <img src="{{ asset('emojis/lu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lu_20.gif&quot;;">
            <img src="{{ asset('emojis/lv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lv_20.gif&quot;;">
            <img src="{{ asset('emojis/ly_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ly_20.gif&quot;;">
            <img src="{{ asset('emojis/ma_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ma_20.gif&quot;;">
            <img src="{{ asset('emojis/mc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mc_20.gif&quot;;">
            <img src="{{ asset('emojis/md_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/md_20.gif&quot;;">
            <img src="{{ asset('emojis/mg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mg_20.gif&quot;;">
            <img src="{{ asset('emojis/mh_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mh_20.gif&quot;;">
            <img src="{{ asset('emojis/mk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mk_20.gif&quot;;">
            <img src="{{ asset('emojis/ml_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ml_20.gif&quot;;">
            <img src="{{ asset('emojis/mm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mm_20.gif&quot;;">
            <img src="{{ asset('emojis/mn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mn_20.gif&quot;;">
            <img src="{{ asset('emojis/mo_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mo_20.gif&quot;;">
            <img src="{{ asset('emojis/mp_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mp_20.gif&quot;;">
            <img src="{{ asset('emojis/mq_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mq_20.gif&quot;;">
            <img src="{{ asset('emojis/mr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mr_20.gif&quot;;">
            <img src="{{ asset('emojis/ms_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ms_20.gif&quot;;">
            <img src="{{ asset('emojis/mt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mt_20.gif&quot;;">
            <img src="{{ asset('emojis/mu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mu_20.gif&quot;;">
            <img src="{{ asset('emojis/mv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mv_20.gif&quot;;">
            <img src="{{ asset('emojis/mw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mw_20.gif&quot;;">
            <img src="{{ asset('emojis/mx_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mx_20.gif&quot;;">
            <img src="{{ asset('emojis/my_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/my_20.gif&quot;;">
            <img src="{{ asset('emojis/mz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mz_20.gif&quot;;">
            <img src="{{ asset('emojis/na_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/na_20.gif&quot;;">
            <img src="{{ asset('emojis/nc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/nc_20.gif&quot;;">
            <img src="{{ asset('emojis/ne_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ne_20.gif&quot;;">
            <img src="{{ asset('emojis/nf_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/nf_20.gif&quot;;">
            <img src="{{ asset('emojis/ng_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ng_20.gif&quot;;">
            <img src="{{ asset('emojis/ni_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ni_20.gif&quot;;">
            <img src="{{ asset('emojis/nl_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/nl_20.gif&quot;;">
            <img src="{{ asset('emojis/no_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/no_20.gif&quot;;">
            <img src="{{ asset('emojis/np_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/np_20.gif&quot;;">
            <img src="{{ asset('emojis/nr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/nr_20.gif&quot;;">
            <img src="{{ asset('emojis/nz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/nz_20.gif&quot;;">
            <img src="{{ asset('emojis/om_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/om_20.gif&quot;;">
            <img src="{{ asset('emojis/pa_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pa_20.gif&quot;;">
            <img src="{{ asset('emojis/pe_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pe_20.gif&quot;;">
            <img src="{{ asset('emojis/pf_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pf_20.gif&quot;;">
            <img src="{{ asset('emojis/pg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pg_20.gif&quot;;">
            <img src="{{ asset('emojis/ph_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ph_20.gif&quot;;">
            <img src="{{ asset('emojis/pk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pk_20.gif&quot;;">
            <img src="{{ asset('emojis/pl_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pl_20.gif&quot;;">
            <img src="{{ asset('emojis/pm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pm_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_20.gif&quot;;">
            <img src="{{ asset('emojis/ps_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ps_20.gif&quot;;">
            <img src="{{ asset('emojis/pt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pt_20.gif&quot;;">
            <img src="{{ asset('emojis/pw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pw_20.gif&quot;;">
            <img src="{{ asset('emojis/py_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/py_20.gif&quot;;">
            <img src="{{ asset('emojis/qa_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/qa_20.gif&quot;;">
            <img src="{{ asset('emojis/re_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/re_20.gif&quot;;">
            <img src="{{ asset('emojis/ro_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ro_20.gif&quot;;">
            <img src="{{ asset('emojis/ru_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ru_20.gif&quot;;">
            <img src="{{ asset('emojis/rw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rw_20.gif&quot;;">
            <img src="{{ asset('emojis/sa_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sa_20.gif&quot;;">
            <img src="{{ asset('emojis/sb_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sb_20.gif&quot;;">
            <img src="{{ asset('emojis/sc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sc_20.gif&quot;;">
            <img src="{{ asset('emojis/sd_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sd_20.gif&quot;;">
            <img src="{{ asset('emojis/se_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/se_20.gif&quot;;">
            <img src="{{ asset('emojis/sg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sg_20.gif&quot;;">
            <img src="{{ asset('emojis/si_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/si_20.gif&quot;;">
            <img src="{{ asset('emojis/sk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sk_20.gif&quot;;">
            <img src="{{ asset('emojis/sl_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sl_20.gif&quot;;">
            <img src="{{ asset('emojis/sm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sm_20.gif&quot;;">
            <img src="{{ asset('emojis/sn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sn_20.gif&quot;;">
            <img src="{{ asset('emojis/so_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/so_20.gif&quot;;">
            <img src="{{ asset('emojis/sr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sr_20.gif&quot;;">
            <img src="{{ asset('emojis/st_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/st_20.gif&quot;;">
            <img src="{{ asset('emojis/sv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sv_20.gif&quot;;">
            <img src="{{ asset('emojis/sy_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sy_20.gif&quot;;">
            <img src="{{ asset('emojis/sz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sz_20.gif&quot;;">
            <img src="{{ asset('emojis/tc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tc_20.gif&quot;;">
            <img src="{{ asset('emojis/td_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/td_20.gif&quot;;">
            <img src="{{ asset('emojis/tf_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tf_20.gif&quot;;">
            <img src="{{ asset('emojis/tg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tg_20.gif&quot;;">
            <img src="{{ asset('emojis/th_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/th_20.gif&quot;;">
            <img src="{{ asset('emojis/tj_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tj_20.gif&quot;;">
            <img src="{{ asset('emojis/tm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tm_20.gif&quot;;">
            <img src="{{ asset('emojis/tn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tn_20.gif&quot;;">
            <img src="{{ asset('emojis/to_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/to_20.gif&quot;;">
            <img src="{{ asset('emojis/tp_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tp_20.gif&quot;;">
            <img src="{{ asset('emojis/tr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tr_20.gif&quot;;">
            <img src="{{ asset('emojis/tt_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tt_20.gif&quot;;">
            <img src="{{ asset('emojis/tv_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tv_20.gif&quot;;">
            <img src="{{ asset('emojis/tw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tw_20.gif&quot;;">
            <img src="{{ asset('emojis/tz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/tz_20.gif&quot;;">
            <img src="{{ asset('emojis/ua_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ua_20.gif&quot;;">
            <img src="{{ asset('emojis/ug_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ug_20.gif&quot;;">
            <img src="{{ asset('emojis/uk_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/uk_20.gif&quot;;">
            <img src="{{ asset('emojis/um_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/um_20.gif&quot;;">
            <img src="{{ asset('emojis/us_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/us_20.gif&quot;;">
            <img src="{{ asset('emojis/uy_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/uy_20.gif&quot;;">
            <img src="{{ asset('emojis/uz_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/uz_20.gif&quot;;">
            <img src="{{ asset('emojis/va_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/va_20.gif&quot;;">
            <img src="{{ asset('emojis/vc_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/vc_20.gif&quot;;">
            <img src="{{ asset('emojis/ve_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ve_20.gif&quot;;">
            <img src="{{ asset('emojis/vg_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/vg_20.gif&quot;;">
            <img src="{{ asset('emojis/vi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/vi_20.gif&quot;;">
            <img src="{{ asset('emojis/vn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/vn_20.gif&quot;;">
            <img src="{{ asset('emojis/vu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/vu_20.gif&quot;;">
            <img src="{{ asset('emojis/ws_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ws_20.gif&quot;;">
            <img src="{{ asset('emojis/ye_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/ye_20.gif&quot;;">
            <img src="{{ asset('emojis/yu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yu_20.gif&quot;;">
            <img src="{{ asset('emojis/za_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/za_20.gif&quot;;">
            <img src="{{ asset('emojis/zm_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/zm_20.gif&quot;;">
            <img src="{{ asset('emojis/zr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/zr_20.gif&quot;;">
            <img src="{{ asset('emojis/zw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/zw_20.gif&quot;;">

            <h3>Fun</h3>
            <img src="{{ asset('emojis/smile100_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile100_20.gif&quot;;">
            <img src="{{ asset('emojis/smile101_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile101_20.gif&quot;;">
            <img src="{{ asset('emojis/smile102_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile102_20.gif&quot;;">
            <img src="{{ asset('emojis/smile104_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile104_20.gif&quot;;">
            <img src="{{ asset('emojis/smile105_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile105_20.gif&quot;;">
            <img src="{{ asset('emojis/smile106_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile106_20.gif&quot;;">
            <img src="{{ asset('emojis/smile109_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile109_20.gif&quot;;">
            <img src="{{ asset('emojis/smile10_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile10_20.gif&quot;;">
            <img src="{{ asset('emojis/smile111_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile111_20.gif&quot;;">
            <img src="{{ asset('emojis/smile113_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile113_20.gif&quot;;">
            <img src="{{ asset('emojis/smile115_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile115_20.gif&quot;;">
            <img src="{{ asset('emojis/smile116_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile116_20.gif&quot;;">
            <img src="{{ asset('emojis/smile117_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile117_20.gif&quot;;">
            <img src="{{ asset('emojis/smile118_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile118_20.gif&quot;;">
            <img src="{{ asset('emojis/smile11_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile11_20.gif&quot;;">
            <img src="{{ asset('emojis/smile120_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile120_20.gif&quot;;">
            <img src="{{ asset('emojis/smile124_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile124_20.gif&quot;;">
            <img src="{{ asset('emojis/smile125_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile125_20.gif&quot;;">
            <img src="{{ asset('emojis/smile126_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile126_20.gif&quot;;">
            <img src="{{ asset('emojis/smile12_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile12_20.gif&quot;;">
            <img src="{{ asset('emojis/smile130_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile130_20.gif&quot;;">
            <img src="{{ asset('emojis/smile131_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile131_20.gif&quot;;">
            <img src="{{ asset('emojis/smile132_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile132_20.gif&quot;;">
            <img src="{{ asset('emojis/smile134_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile134_20.gif&quot;;">
            <img src="{{ asset('emojis/smile135_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile135_20.gif&quot;;">
            <img src="{{ asset('emojis/smile137_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile137_20.gif&quot;;">
            <img src="{{ asset('emojis/smile13_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile13_20.gif&quot;;">
            <img src="{{ asset('emojis/smile141_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile141_20.gif&quot;;">
            <img src="{{ asset('emojis/smile147_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile147_20.gif&quot;;">
            <img src="{{ asset('emojis/smile149_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile149_20.gif&quot;;">
            <img src="{{ asset('emojis/smile151_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile151_20.gif&quot;;">
            <img src="{{ asset('emojis/smile156_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile156_20.gif&quot;;">
            <img src="{{ asset('emojis/smile165_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile165_20.gif&quot;;">
            <img src="{{ asset('emojis/smile167_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile167_20.gif&quot;;">
            <img src="{{ asset('emojis/smile168_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile168_20.gif&quot;;">
            <img src="{{ asset('emojis/smile16_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile16_20.gif&quot;;">
            <img src="{{ asset('emojis/smile171_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile171_20.gif&quot;;">
            <img src="{{ asset('emojis/smile173_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile173_20.gif&quot;;">
            <img src="{{ asset('emojis/smile174_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile174_20.gif&quot;;">
            <img src="{{ asset('emojis/smile176_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile176_20.gif&quot;;">
            <img src="{{ asset('emojis/smile177_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile177_20.gif&quot;;">
            <img src="{{ asset('emojis/smile178_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile178_20.gif&quot;;">
            <img src="{{ asset('emojis/smile188_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile188_20.gif&quot;;">
            <img src="{{ asset('emojis/smile192_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile192_20.gif&quot;;">
            <img src="{{ asset('emojis/smile193_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile193_20.gif&quot;;">
            <img src="{{ asset('emojis/smile215_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile215_20.gif&quot;;">
            <img src="{{ asset('emojis/smile220_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile220_20.gif&quot;;">
            <img src="{{ asset('emojis/smile222_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile222_20.gif&quot;;">
            <img src="{{ asset('emojis/smile226_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile226_20.gif&quot;;">
            <img src="{{ asset('emojis/smile227_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile227_20.gif&quot;;">
            <img src="{{ asset('emojis/smile230_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile230_20.gif&quot;;">
            <img src="{{ asset('emojis/smile236_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile236_20.gif&quot;;">
            <img src="{{ asset('emojis/smile238_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile238_20.gif&quot;;">
            <img src="{{ asset('emojis/smile23_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile23_20.gif&quot;;">
            <img src="{{ asset('emojis/smile241_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile241_20.gif&quot;;">
            <img src="{{ asset('emojis/smile245_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile245_20.gif&quot;;">
            <img src="{{ asset('emojis/smile247_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile247_20.gif&quot;;">
            <img src="{{ asset('emojis/smile2_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/smile2_20.gif&quot;;">

            <h3>Objects</h3>
            <img src="{{ asset('emojis/02_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/02_20.gif&quot;;">
            <img src="{{ asset('emojis/08_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/08_20.gif&quot;;">
            <img src="{{ asset('emojis/09_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/09_20.gif&quot;;">
            <img src="{{ asset('emojis/10_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/10_20.gif&quot;;">
            <img src="{{ asset('emojis/11_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/11_20.gif&quot;;">
            <img src="{{ asset('emojis/12_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/12_20.gif&quot;;">
            <img src="{{ asset('emojis/15_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/15_20.gif&quot;;">
            <img src="{{ asset('emojis/17_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/17_20.gif&quot;;">
            <img src="{{ asset('emojis/47_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/47_20.gif&quot;;">
            <img src="{{ asset('emojis/a_down_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/a_down_20.gif&quot;;">
            <img src="{{ asset('emojis/a_left_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/a_left_20.gif&quot;;">
            <img src="{{ asset('emojis/a_right_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/a_right_20.gif&quot;;">
            <img src="{{ asset('emojis/a_up_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/a_up_20.gif&quot;;">
            <img src="{{ asset('emojis/bk_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bk_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/bk_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bk_star_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_di_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_paw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_paw_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_star_20.gif&quot;;">
            <img src="{{ asset('emojis/bl_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/bl_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/blustar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/blustar_20.gif&quot;;">
            <img src="{{ asset('emojis/cross_re_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cross_re_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_di_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_grade_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_grade_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_paw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_paw_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_star_20.gif&quot;;">
            <img src="{{ asset('emojis/cy_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cy_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/cyanstar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cyanstar_20.gif&quot;;">
            <img src="{{ asset('emojis/eye_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/eye_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/foot_mot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/foot_mot_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_ar_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_ar_dn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_ar_dn_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_arr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_arr_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_paw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_paw_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/gr_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/gr_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/grnstar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/grnstar_20.gif&quot;;">
            <img src="{{ asset('emojis/l_blue_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_blue_20.gif&quot;;">
            <img src="{{ asset('emojis/l_brown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_brown_20.gif&quot;;">
            <img src="{{ asset('emojis/l_cyan_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_cyan_20.gif&quot;;">
            <img src="{{ asset('emojis/l_green_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_green_20.gif&quot;;">
            <img src="{{ asset('emojis/l_grey_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_grey_20.gif&quot;;">
            <img src="{{ asset('emojis/l_purple_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_purple_20.gif&quot;;">
            <img src="{{ asset('emojis/l_red_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_red_20.gif&quot;;">
            <img src="{{ asset('emojis/l_yellow_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/l_yellow_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_ar_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_ar_dn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_ar_dn_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_di_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/lb_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lb_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/lblustar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/lblustar_20.gif&quot;;">
            <img src="{{ asset('emojis/or_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/or_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/or_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/or_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/or_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_star_20.gif&quot;;">
            <img src="{{ asset('emojis/or_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/or_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_ar_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_ar_dn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_ar_dn_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_dash_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_dash_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_grade_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_grade_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_minus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_minus_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/pi_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pi_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/pinkstar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pinkstar_20.gif&quot;;">
            <img src="{{ asset('emojis/plasma_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/plasma_20.gif&quot;;">
            <img src="{{ asset('emojis/pmarcube_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pmarcube_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_ar_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_ar_dn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_ar_dn_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_dash_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_dash_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_di_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_grade_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_grade_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_minus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_minus_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_star_20.gif&quot;;">
            <img src="{{ asset('emojis/pr_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/pr_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/purstar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/purstar_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_dash_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_dash_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_di_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_grade_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_grade_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_paw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_paw_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_star_20.gif&quot;;">
            <img src="{{ asset('emojis/rd_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rd_tri_20.gif&quot;;">
            <img src="{{ asset('emojis/red_arr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/red_arr_20.gif&quot;;">
            <img src="{{ asset('emojis/redstar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/redstar_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere02_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere02_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere03_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere03_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere04_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere04_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere05_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere05_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere06_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere06_20.gif&quot;;">
            <img src="{{ asset('emojis/sphere07_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/sphere07_20.gif&quot;;">
            <img src="{{ asset('emojis/star_bul_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/star_bul_20.gif&quot;;">
            <img src="{{ asset('emojis/wh_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/wh_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/wh_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/wh_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/wh_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/wh_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/wh_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/wh_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/y_arr_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/y_arr_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_ar_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_ar_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_ar_dn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_ar_dn_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_ball_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_ball_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_dash_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_dash_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_di_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_di_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_diam_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_diam_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_dot_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_dot_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_menu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_menu_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_minus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_minus_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_paw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_paw_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_pin_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_pin_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_plus_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_plus_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_sdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_sdi_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_sqdi_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_sqdi_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_star_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_star_20.gif&quot;;">
            <img src="{{ asset('emojis/yl_tri_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/yl_tri_20.gif&quot;;">

            <h3>Other</h3>
            <img src="{{ asset('emojis/Imageup_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/Imageup_20.gif&quot;;">
            <img src="{{ asset('emojis/arrowdown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/arrowdown_20.gif&quot;;">
            <img src="{{ asset('emojis/arrowdxblue_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/arrowdxblue_20.gif&quot;;">
            <img src="{{ asset('emojis/arrowdxorange_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/arrowdxorange_20.gif&quot;;">
            <img src="{{ asset('emojis/arrowup_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/arrowup_20.gif&quot;;">
            <img src="{{ asset('emojis/box_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/box_20.gif&quot;;">
            <img src="{{ asset('emojis/category_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/category_20.gif&quot;;">
            <img src="{{ asset('emojis/centradown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/centradown_20.gif&quot;;">
            <img src="{{ asset('emojis/centraup_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/centraup_20.gif&quot;;">
            <img src="{{ asset('emojis/copy_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/copy_20.gif&quot;;">
            <img src="{{ asset('emojis/cut_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/cut_20.gif&quot;;">
            <img src="{{ asset('emojis/draw_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/draw_20.gif&quot;;">
            <img src="{{ asset('emojis/drawdown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/drawdown_20.gif&quot;;">
            <img src="{{ asset('emojis/drawtext_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/drawtext_20.gif&quot;;">
            <img src="{{ asset('emojis/drawtextdown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/drawtextdown_20.gif&quot;;">
            <img src="{{ asset('emojis/edit_file_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/edit_file_20.gif&quot;;">
            <img src="{{ asset('emojis/elencoordinatodown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/elencoordinatodown_20.gif&quot;;">
            <img src="{{ asset('emojis/elencoordinatoup_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/elencoordinatoup_20.gif&quot;;">
            <img src="{{ asset('emojis/emaildown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/emaildown_20.gif&quot;;">
            <img src="{{ asset('emojis/emailup_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/emailup_20.gif&quot;;">
            <img src="{{ asset('emojis/fileuploaddown_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/fileuploaddown_20.gif&quot;;">
            <img src="{{ asset('emojis/folder_delete_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/folder_delete_20.gif&quot;;">
            <img src="{{ asset('emojis/home_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/home_20.gif&quot;;">
            <img src="{{ asset('emojis/mana_blu_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mana_blu_20.gif&quot;;">
            <img src="{{ asset('emojis/mana_grn_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mana_grn_20.gif&quot;;">
            <img src="{{ asset('emojis/mana_red_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mana_red_20.gif&quot;;">
            <img src="{{ asset('emojis/mana_wit_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/mana_wit_20.gif&quot;;">
            <img src="{{ asset('emojis/paste_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/paste_20.gif&quot;;">
            <img src="{{ asset('emojis/poll_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/poll_20.gif&quot;;">
            <img src="{{ asset('emojis/recent_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/recent_20.gif&quot;;">
            <img src="{{ asset('emojis/refresh_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/refresh_20.gif&quot;;">
            <img src="{{ asset('emojis/rename_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/rename_20.gif&quot;;">
            <img src="{{ asset('emojis/search_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/search_20.gif&quot;;">
            <img src="{{ asset('emojis/up_20.gif') }}" onclick="window.location.href= window.location.href +&quot;/up_20.gif&quot;;">

        </div>
    </div>
</section>
@endsection