/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package EventListTable;

/**
 *
 * @author ARFAH
 */
public class User {
    private String event_id,event_name,venue,edate,charge,contact,email,duration,endtime,activity,grp_members;
    private byte[] picture;
    public User(String event_id, String event_name, String venue, String edate, String charge, String contact, String email,String duration,String endtime, String activity, String grp_members, byte[] poster)
    {
        this.event_id=event_id;
        this.event_name=event_name;
        this.venue=venue;
        this.edate=edate;
        this.charge=charge;
        this.contact=contact;
        this.email=email;
        this.duration=duration;
        this.endtime=endtime;
        this.activity=activity;
        this.grp_members=grp_members;
        this.picture = poster;
    }
    public String getevent_id(){
        return event_id;
                }
    public String getevent_name(){
        return event_name;
                }
    public String getvenue(){
        return venue;
                }
    public String getedate(){
        return edate;
                }
    public String getcharge(){
        return charge;
                }
    public String getcontact(){
        return contact;
                }
    public String getemail(){
        return email;
                }
    public String getduration(){
        return duration;
                }
    public String getendtime(){
        return endtime;
                }
public String getactivity(){
        return activity;
}    
public String getgrp_members(){
        return grp_members;
}   
public byte[] getImage(){
    return picture;
}
}
