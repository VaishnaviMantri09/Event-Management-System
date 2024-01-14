/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package EHView123;


import static EHView123.EHView.EHTable;
import static EHView123.EHView.count;
import static EHView123.EHView.gm;
import java.awt.Color;
import java.awt.Component;
import java.awt.Dimension;
import javax.swing.JOptionPane;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.SwingUtilities;
import javax.swing.table.DefaultTableCellRenderer;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.TableCellRenderer;

/**
 *
 * @author ARFAH
 */
             /*  public static  JTable getNewRenderedTable(final JTable table) {
        table.setDefaultRenderer(Object.class, new DefaultTableCellRenderer(){
            
@Override
            public Component getTableCellRendererComponent(JTable table,
                    Object value, boolean isSelected, boolean hasFocus, int row, int col) {
                super.getTableCellRendererComponent(table, value, isSelected, hasFocus, row, col);
                String status = (String)table.getModel().getValueAt(row, STATUS_COL);
                if ("active".equals(status)) {
                    setBackground(Color.BLACK);
                    setForeground(Color.WHITE);
                } else {
                    setBackground(table.getBackground());
                    setForeground(table.getForeground());
                }       
                return this;
            }   
        });
        return table;
                   }   */

     /* public class TableColorCellRenderer implements TableCellRenderer
      {
                           final TableCellRenderer RENDERER = new DefaultTableCellRenderer();
                           @Override
                           public Component getTableCellRendererComponent (JTable table, Object value, boolean isSelected, boolean hasFocus, int row, int column) 
                           {
                               Component c= RENDERER.getTableCellRendererComponent(EHTable, value, isSelected, hasFocus, row, column);
                               // if(column==1)
                               //{
                           
                               int rowCount = EHTable.getRowCount();
                               //JOptionPane.showMessageDialog(null, rowCount);
                                   Object result=EHTable.getModel().getValueAt(2, 5);
                                   Color color=null;
                                   /*color=Color.RED;
                                   c.setForeground(color);*/
                                  /* if(count<(gm-1))
                                   {
                                   color=Color.RED;
                                   c.setBackground(color);
                                   }
                                   
                              //}
                               return c;
                           }*/
//}



    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable(){
            @Override
            public void run() {
                JOptionPane.showMessageDialog(null, new JScrollPane(getTable()));
            }
        });
    }
}



