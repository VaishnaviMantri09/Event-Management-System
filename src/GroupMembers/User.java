/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GroupMembers;

/**
 *
 * @author ARFAH
 */
public class User {
     private String group_id,event_name,prn,name,branch,year;
    public User(String group_id, String event_name, String prn, String name, String branch, String year)
    {
        this.group_id=group_id;
        this.event_name=event_name;
        this.prn=prn;
        this.name=name;
        this.branch=branch;
        this.year=year;
    }
    public String getgroup_id(){
        return group_id;
                }
    public String getevent_name(){
        return event_name;
                }
    public String getprn(){
        return prn;
                }
    public String getname(){
        return name;
                }
    public String getbranch(){
        return branch;
                }
    public String getyear(){
        return year;
    }
    
}
