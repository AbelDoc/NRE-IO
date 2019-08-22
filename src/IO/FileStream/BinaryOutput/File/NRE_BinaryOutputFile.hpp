
    /**
     * @file NRE_BinaryOutputFile.hpp
     * @brief Declaration of Engine's IO's Object : BinaryOutputFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../../Output/File/NRE_OutputFile.hpp"
    #include "../Stream/NRE_BinaryOutputStream.hpp"

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @class BinaryOutputFile
             * @brief Manage binary output file stream
             */
            class BinaryOutputFile : public OutputFile, public BinaryOutputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        BinaryOutputFile() = delete;
                        /**
                         * Construct an binary output file stream with a given file's path
                         * @param p the file's stream path
                         */
                        BinaryOutputFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move o into this
                         * @param o the binary output file to move
                         */
                        BinaryOutputFile(BinaryOutputFile && o) = default;

                    //## Deconstructor ##//
                        /**
                         * BinaryOutputFile Deconstructor
                         */
                        ~BinaryOutputFile() = default;

                    //## Methods ##//
                        /**
                         * @return the binary output file stream opening mode
                         */
                        std::ios_base::openmode getMode() const override;
                        /**
                         * @return the binary output file's stream
                         */
                        std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of i into this
                         * @param o the binary output file to move
                         * @return  the reference of himself
                         */
                        BinaryOutputFile& operator =(BinaryOutputFile && o);
            };
        }
    }

    #include "NRE_BinaryOutputFile.tpp"
