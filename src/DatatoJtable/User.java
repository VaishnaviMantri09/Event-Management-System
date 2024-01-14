/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DatatoJtable;

/**
 *
 * @author ARFAH
 */
class User {
    private String event_id,event_name,venue,edate,contact,email,duration,endtime,charge,money_given,activity;
    private byte [] picture;
    public User(String event_id, String event_name, String venue, String edate, String contact, String email,String duration,String endtime,String charge,String money_given,String activity, byte[] poster)
    {
        this.event_id=event_id;
        this.event_name=event_name;
        this.venue=venue;
        this.edate=edate;
        this.contact=contact;
        this.email=email;
        this.duration=duration;
        this.endtime=endtime;
         this.charge=charge;
         this.money_given=money_given;
         this.activity=activity;
         this.picture= poster;
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
      public String getcharge(){
        return charge;
                }
  public String getmoney_given(){
        return money_given;
                }
    public String getactivity(){
        return activity;
                }
       public byte[] getImage(){
           return picture;
       }
    }

