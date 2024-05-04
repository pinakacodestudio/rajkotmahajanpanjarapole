<?php
namespace App\Helper;
use Auth;
use DB;
class Helper
{
    public static function set_menu_role($menu, $val_role_details)
    {
        $menu_slug = $menu->role;
        if (isset($menu->submenu) && count($menu->submenu)) {
            $checked_view = '';
            $checked_add = '';
            $checked_edit = '';
            $checked_delete = '';
            $checked_allocation = '';
            $checked_export = '';
            $checked_allrecord = '';
            $checked_executive = '';
            if (isset($val_role_details->{$menu_slug}->view)) {
                $checked_view = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->add)) {
                $checked_add = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->edit)) {
                $checked_edit = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->delete)) {
                $checked_delete = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->allocation)) {
                $checked_allocation = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->export)) {
                $checked_export = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->allrecord)) {
                $checked_allrecord = 'checked';
            }
            if (isset($val_role_details->{$menu_slug}->executive)) {
                $checked_executive = 'checked';
            }
    
            $str = ' <li>' . $menu->name . ' <label>';
            if (strpos($menu->role_type, 'view') !== false)
                $str .= '<input type="checkbox" name="role[' . $menu_slug . '][view]" value="1" ' . $checked_view . ' > View </label>';
            if (strpos($menu->role_type, 'add') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][add]" value="1" ' . $checked_add . ' > Add </label>';
            if (strpos($menu->role_type, 'edit') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][edit]" value="1" ' . $checked_edit . '> Edit </label>';
            if (strpos($menu->role_type, 'delete') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][delete]" value="1" ' . $checked_delete . ' > Delete </label>';
            if (strpos($menu->role_type, 'allocation') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][allocation]" value="1" ' . $checked_allocation . ' > Allocation </label>';
            if (strpos($menu->role_type, 'export') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][export]" value="1" ' . $checked_export . ' > Export </label>';
            if (strpos($menu->role_type, 'allrecord') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][allrecord]" value="1" ' . $checked_allrecord . ' > All Records </label>';
            if (strpos($menu->role_type, 'executive') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][executive]" value="1" ' . $checked_executive . ' > As Executive </label>';
            $str .= '<ul>';
    
            foreach ($menu->submenu as $sub) {
                $str .= set_menu_role($sub, $val_role_details);
            }
            $str .= '</ul></li>';
        } else {
    
            $checked_view = '';
            $checked_add = '';
            $checked_edit = '';
            $checked_delete = '';
            $checked_allocation = '';
            $checked_export = '';
            $checked_allrecord = '';
            $checked_executive = '';
            if (isset($val_role_details->{$menu_slug}->view)) {
                $checked_view = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->add)) {
                $checked_add = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->edit)) {
                $checked_edit = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->delete)) {
                $checked_delete = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->allocation)) {
                $checked_allocation = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->export)) {
                $checked_export = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->allrecord)) {
                $checked_allrecord = 'checked';
            }
    
            if (isset($val_role_details->{$menu_slug}->executive)) {
                $checked_executive = 'checked';
            }
    
            $str = ' <li>' . $menu->name;
            if (strpos($menu->role_type, 'view') !== false)
                $str .= '
                <div class="switcher switcher-success">
                    <input name="role[' . $menu_slug . '][view]"  id="role[' . $menu_slug . '][view]"  value="1" type="checkbox" ' . $checked_view . ' >
                    <label for="role[' . $menu_slug . '][view]"></label>
                </div>';
            if (strpos($menu->role_type, 'add') !== false)
                $str .= ' <div class="switcher switcher-info">
                <input name="role[' . $menu_slug . '][add]"  id="role[' . $menu_slug . '][add]"  value="1" type="checkbox" ' . $checked_add . ' >
                <label for="role[' . $menu_slug . '][add]"></label>
            </div>
            ';
            if (strpos($menu->role_type, 'edit') !== false)
                $str .= ' <div class="switcher switcher-warning">
                <input name="role[' . $menu_slug . '][edit]"  id="role[' . $menu_slug . '][edit]"  value="1" type="checkbox" ' . $checked_edit . ' >
                <label for="role[' . $menu_slug . '][edit]"></label>
            </div>';
            if (strpos($menu->role_type, 'delete') !== false)
                $str .= ' <div class="switcher switcher-danger">
                <input name="role[' . $menu_slug . '][delete]"  id="role[' . $menu_slug . '][delete]"  value="1" type="checkbox" ' . $checked_delete . ' >
                <label for="role[' . $menu_slug . '][delete]"></label>
            </div>';
            if (strpos($menu->role_type, 'allocation') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][allocation]" value="1" ' . $checked_allocation . ' > Allocation </label>';
            if (strpos($menu->role_type, 'export') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][export]" value="1" ' . $checked_export . ' > Export </label>';
            if (strpos($menu->role_type, 'allrecord') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][allrecord]" value="1" ' . $checked_allrecord . ' > All Record </label>';
            if (strpos($menu->role_type, 'executive') !== false)
                $str .= '<label><input type="checkbox" name="role[' . $menu_slug . '][executive]" value="1" ' . $checked_executive . ' > As Executive </label>';
        }
        return $str;
    }
    public static function check_role_assigned($module_name, $role_type)
    {
        $user_role = Auth::guard('admin')->user()->id;
        $roleid=DB::table('users')->where('id',$user_role)->first();
        $roledata=DB::table('tbl_role')->where('id',$roleid->role_id)->first();
        $logged_in_role=$roledata->role;
        if ($roleid->role_id == '1') { //1 For Super Admin
            return 1;
        }
        $logged_in_role_arr = json_decode($logged_in_role);
        if (isset($logged_in_role_arr->{$module_name}) && isset($logged_in_role_arr->{$module_name}->{$role_type}) && $logged_in_role_arr->{$module_name}->{$role_type} == 1)
            return 1;
        else
            return 0;
    }
    
      

}
?>