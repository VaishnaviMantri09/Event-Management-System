/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package EventListTable;

import DatatoJtable.StudentView;
import EventListTable.User;
import OriginalStudentLoginPage.OStudentLoginPage;
import java.awt.Image;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import javax.swing.ImageIcon;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.TableModel;

/**
 *
 * @author ARFAH
 */
public class EList extends javax.swing.JFrame {

    /**
     * Creates new form EList
     */
    public EList() {
        initComponents();
        show_user();
    }
public ArrayList<User> userList() {
    ArrayList<User> userList = new ArrayList<>();
    try
               {
                   // Class.forName("oracle.jdbc.driver.OracleDriver");
                    Connection con = DriverManager.getConnection("jdbc:postgresql://localhost:5432/MiniProject","postgres","Silver7Moons");
 
                   String sql="Select * from event_table ";
                     //JOptionPane.showMessageDialog(null,  sql );
System.out.println(sql);
                  // JOptionPane.showMessageDialog(null,  OStudentLoginPage.PRNT.getText() );
                    Statement ps =con.createStatement();
                           
                    ResultSet rs = ps.executeQuery(sql);
               User user;
                    while(rs.next()) {
                        user=new User(rs.getString("event_id" ),rs.getString("event_name" ),rs.getString("venue" ),rs.getString("edate" ),rs.getString("charge" ),rs.getString("contact" ),rs.getString("email" ),rs.getString("duration" ),rs.getString("endtime" ), rs.getString("activity"),rs.getString("grp_members" ),rs.getBytes("poster"));
                        userList.add(user);
                    }
               }
      catch(Exception e) {
               JOptionPane.showMessageDialog(null, e);
         }
    return userList;
}
public void show_user() {
    ArrayList<User> list = userList();
    DefaultTableModel model= (DefaultTableModel) EventList.getModel();
    Object [] row = new Object[12];
    for(int i=0;i<list.size();i++){
        row[0]=i+1;
        row[1]=list.get(i).getevent_id();
        row[2]=list.get(i).getevent_name();
        row[3]=list.get(i).getvenue();
        row[4]=list.get(i).getedate();
        row[5]=list.get(i).getcharge();
        row[6]=list.get(i).getcontact();
        row[7]=list.get(i).getemail();
        row[8]=list.get(i).getduration();
        row[9]=list.get(i).getendtime();
        row[10]=list.get(i).getactivity();
        row[11]=list.get(i).getgrp_members();
        model.addRow(row);
    }
}

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane2 = new javax.swing.JScrollPane();
        jPanel2 = new javax.swing.JPanel();
        jPanel1 = new javax.swing.JPanel();
        PosterL = new javax.swing.JLabel();
        BackB = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        EventList = new javax.swing.JTable();
        PReqB = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jPanel1.setBackground(new java.awt.Color(0, 153, 153));

        PosterL.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(PosterL, javax.swing.GroupLayout.DEFAULT_SIZE, 350, Short.MAX_VALUE)
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(PosterL, javax.swing.GroupLayout.DEFAULT_SIZE, 340, Short.MAX_VALUE)
        );

        BackB.setText("Back");
        BackB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                BackBActionPerformed(evt);
            }
        });

        EventList.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "S. No.", "Event Id", "Event Name", "Venue", "Date", "Charge", "Contact", "Email", "Duration", "End Time", "Active?", "Group Members"
            }
        ));
        EventList.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                EventListMouseClicked(evt);
            }
        });
        jScrollPane1.setViewportView(EventList);

        PReqB.setText("Send Participation Request");
        PReqB.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                PReqBActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addGap(68, 68, 68)
                        .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(163, 163, 163)
                        .addComponent(PReqB)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 182, Short.MAX_VALUE)
                        .addComponent(BackB)
                        .addGap(96, 96, 96))
                    .addComponent(jScrollPane1))
                .addContainerGap())
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 360, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addGap(12, 12, 12)
                        .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel2Layout.createSequentialGroup()
                        .addGap(29, 29, 29)
                        .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                            .addComponent(BackB)
                            .addComponent(PReqB))))
                .addContainerGap())
        );

        jScrollPane2.setViewportView(jPanel2);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 1062, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 487, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void BackBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_BackBActionPerformed
        // TODO add your handling code here:
         try
        {
           StudentView  menu= new StudentView();
            menu.setVisible(true);
            setVisible(false);
        }
        catch(Exception e) {
            JOptionPane.showMessageDialog(null, e);
        }
    }//GEN-LAST:event_BackBActionPerformed

    private void EventListMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_EventListMouseClicked
        // TODO add your handling code here:
          int i= EventList.getSelectedRow();
        TableModel model = EventList.getModel();
        byte[] img = (userList().get(i).getImage());
         ImageIcon imageIcon=new ImageIcon(new ImageIcon(img).getImage().getScaledInstance(PosterL.getWidth(), PosterL.getHeight(), Image.SCALE_SMOOTH));
        PosterL.setIcon(imageIcon);
    }//GEN-LAST:event_EventListMouseClicked

    private void PReqBActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_PReqBActionPerformed
        // TODO add your handling code here:
      
          try
               {
                   String value=  JOptionPane.showInputDialog(this, "Enter event-id to request participation:");
                   // Class.forName("oracle.jdbc.driver.OracleDriver");
                    Connection con = DriverManager.getConnection("jdbc:postgresql://localhost:5432/MiniProject","postgres","Silver7Moons");
 
                   String l="Insert into request_table values ('"+OStudentLoginPage.PRNT.getText()+"','"+value+"') ";
                   PreparedStatement s = con.prepareStatement(l);
            s.executeUpdate();
              // ResultSet r = s.executeQuery(); 
               }
                 catch(Exception e) {
            JOptionPane.showMessageDialog(null, e);
        }
    }//GEN-LAST:event_PReqBActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(EList.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(EList.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(EList.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(EList.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new EList().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton BackB;
    private javax.swing.JTable EventList;
    private javax.swing.JButton PReqB;
    private javax.swing.JLabel PosterL;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    // End of variables declaration//GEN-END:variables
}