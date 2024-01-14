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
import javax.swing.JTable;
import javax.swing.table.TableCellRenderer;

/**
 *
 * @author ARFAH
 */
public class DTable extends JTable{
    @Override
    public Component prepareRenderer(TableCellRenderer renderer, int rowIndex, int columnIndex){
        Component component = super.prepareRenderer(renderer, rowIndex, columnIndex);
      //  final Component c=super.getTableCellRendererComponent(table, value, )
        int row = 0;
        //if((Float.class.equals(this.getColumnClass(2))) && (getValueAt(rowIndex, 2)!=null))
       String st_val=EHTable.getValueAt(row, 2).toString();
        
            if(count<(gm-1))
            {
                component.setBackground(Color.YELLOW);
                        component.setForeground(Color.RED);
                       
        }
        
return component;
        }
}

