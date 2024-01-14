/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Request;

/**
 *
 * @author ARFAH
 */
public class Userreq {
    private String prn,name,phone_number,e_mail,branch,year,money_given;
    //private int group_id;
    public Userreq(String prn, String name, String phone_number, String e_mail, String branch, String year, String money_given)
    {
        this.prn=prn;
        this.name=name;
        this.phone_number=phone_number;
        this.e_mail=e_mail;
        this.branch=branch;
        this.year=year;
       this.money_given=money_given;

    }
    public String getprn(){
        return prn;
                }
    public String getname(){
        return name;
                }
    public String getphone_number(){
        return phone_number;
                }
    public String gete_mail(){
        return e_mail;
                }
    public String getbranch(){
        return branch;
                }
    public String getyear(){
        return year;
                }
    public String getmoney_given(){
        return money_given;
                }

}
