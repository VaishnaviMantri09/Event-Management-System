/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package EHView123;

import static EHView123.EHView.EHTable;
import java.awt.event.ComponentAdapter;

/**
 *
 * @author ARFAH
 */
public class jtc extends javax.swing.JFrame 
{
public jtc()
{
    initComponents();
    EHTable.setDefaultRenderer(Object.class, new MyTableCellRenderer());
    EHTable.addComponentListener(new ComponentAdapter())
    {
        public void componentResized(ComponentEvent e)
        {
            EHTable.scrollRectToVisible(EHTable.getCellRect(EHTable.getRowCount() - 1, 0, true));
        }
    }
};
}


